<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeServiceCommand extends Command
{
    protected $signature = 'make:service {name} {--model=} {--crud}';
    protected $description = '建立新的 Service 類';

    public function handle()
    {
        $name = $this->argument('name');
        $model = $this->option('model');
        $isCrud = $this->option('crud');

        // 確保名稱以 Service 結尾
        if (!str_ends_with($name, 'Service')) {
            $name .= 'Service';
        }

        // 建立目錄
        $path = app_path('Services');
        if (!File::exists($path)) {
            File::makeDirectory($path, 0755, true);
        }

        // 生成檔案路徑
        $filePath = $path . '/' . $name . '.php';

        // 檢查檔案是否已存在
        if (File::exists($filePath)) {
            $this->error('Service 已經存在!');
            return false;
        }

        // 生成內容
        $content = $this->generateServiceContent($name, $model, $isCrud);

        // 建立檔案
        File::put($filePath, $content);

        $this->info('Service 建立成功!');
        $this->info("檔案位置: {$filePath}");

        return true;
    }

    protected function generateServiceContent($name, $model, $isCrud)
    {
        $namespace = 'App\Services';
        $className = class_basename($name);
        
        $modelClass = $model ? "use App\Models\\{$model};" : '';
        $modelProperty = $model ? "\n    protected \${$model};\n" : '';
        $constructor = $model ? $this->generateConstructor($model) : '';
        
        $methods = $isCrud ? $this->generateCrudMethods($model) : '';

        return <<<PHP
<?php

namespace {$namespace};

{$modelClass}
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class {$className}
{
    {$modelProperty}
    {$constructor}
    {$methods}
}

PHP;
    }

    protected function generateConstructor($model)
    {
        $modelVariable = lcfirst($model);
        return <<<PHP
    
    public function __construct({$model} \${$modelVariable})
    {
        \$this->{$modelVariable} = \${$modelVariable};
    }
PHP;
    }

    protected function generateCrudMethods($model)
    {
        if (!$model) return '';

        $modelVariable = lcfirst($model);
        
        return <<<PHP

    /**
     * 獲取列表
     */
    public function getList(array \$params = [])
    {
        try {
            \$query = \$this->{$modelVariable}->query();
            
            // 加入搜尋條件
            if (isset(\$params['keyword'])) {
                \$query->where('name', 'like', "%{\$params['keyword']}%");
            }
            
            return \$query->paginate(\$params['per_page'] ?? 15);
        } catch (\Exception \$e) {
            Log::error('[{$model}Service] getList error: ' . \$e->getMessage());
            throw \$e;
        }
    }

    /**
     * 獲取單筆資料
     */
    public function find(int \$id)
    {
        try {
            return \$this->{$modelVariable}->findOrFail(\$id);
        } catch (\Exception \$e) {
            Log::error('[{$model}Service] find error: ' . \$e->getMessage());
            throw \$e;
        }
    }

    /**
     * 建立資料
     */
    public function create(array \$data)
    {
        DB::beginTransaction();
        try {
            \$result = \$this->{$modelVariable}->create(\$data);
            DB::commit();
            return \$result;
        } catch (\Exception \$e) {
            DB::rollBack();
            Log::error('[{$model}Service] create error: ' . \$e->getMessage());
            throw \$e;
        }
    }

    /**
     * 更新資料
     */
    public function update(int \$id, array \$data)
    {
        DB::beginTransaction();
        try {
            \$item = \$this->{$modelVariable}->findOrFail(\$id);
            \$item->update(\$data);
            DB::commit();
            return \$item;
        } catch (\Exception \$e) {
            DB::rollBack();
            Log::error('[{$model}Service] update error: ' . \$e->getMessage());
            throw \$e;
        }
    }

    /**
     * 刪除資料
     */
    public function delete(int \$id)
    {
        DB::beginTransaction();
        try {
            \$item = \$this->{$modelVariable}->findOrFail(\$id);
            \$result = \$item->delete();
            DB::commit();
            return \$result;
        } catch (\Exception \$e) {
            DB::rollBack();
            Log::error('[{$model}Service] delete error: ' . \$e->getMessage());
            throw \$e;
        }
    }
PHP;
    }
} 