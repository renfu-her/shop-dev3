import React, { useState, useEffect } from 'react';
import { productService, Product, CreateProductParams } from '../api/productService';

const ProductList: React.FC = () => {
  const [products, setProducts] = useState<Product[]>([]);
  const [loading, setLoading] = useState(false);
  const [error, setError] = useState('');
  
  // 表單狀態
  const [formData, setFormData] = useState<CreateProductParams>({
    name: '',
    price: 0,
    description: ''
  });

  useEffect(() => {
    fetchProducts();
  }, []);

  const fetchProducts = async () => {
    try {
      setLoading(true);
      const data = await productService.getProducts();
      setProducts(data);
    } catch (err: any) {
      setError(err.response?.data?.message || '獲取產品列表失敗');
    } finally {
      setLoading(false);
    }
  };

  const handleSubmit = async (e: React.FormEvent) => {
    e.preventDefault();
    try {
      await productService.createProduct(formData);
      // 重新獲取產品列表
      fetchProducts();
      // 清空表單
      setFormData({
        name: '',
        price: 0,
        description: ''
      });
    } catch (err: any) {
      setError(err.response?.data?.message || '新增產品失敗');
    }
  };

  const handleChange = (e: React.ChangeEvent<HTMLInputElement | HTMLTextAreaElement>) => {
    const { name, value } = e.target;
    setFormData(prev => ({
      ...prev,
      [name]: name === 'price' ? parseFloat(value) : value
    }));
  };

  if (loading) return <div>載入中...</div>;
  if (error) return <div>錯誤：{error}</div>;

  return (
    <div className="product-list">
      <h2>產品列表</h2>

      {/* 新增產品表單 */}
      <form onSubmit={handleSubmit} className="product-form">
        <div>
          <label>名稱：</label>
          <input
            type="text"
            name="name"
            value={formData.name}
            onChange={handleChange}
            required
          />
        </div>
        
        <div>
          <label>價格：</label>
          <input
            type="number"
            name="price"
            value={formData.price}
            onChange={handleChange}
            required
          />
        </div>
        
        <div>
          <label>描述：</label>
          <textarea
            name="description"
            value={formData.description}
            onChange={handleChange}
            required
          />
        </div>

        <button type="submit">新增產品</button>
      </form>

      {/* 產品列表 */}
      <div className="products">
        {products.map(product => (
          <div key={product.id} className="product-item">
            <h3>{product.name}</h3>
            <p>價格：${product.price}</p>
            <p>{product.description}</p>
            <p>建立時間：{product.created_at}</p>
          </div>
        ))}
      </div>
    </div>
  );
};

export default ProductList; 