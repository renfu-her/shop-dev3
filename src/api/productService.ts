import api from './config';

export interface Product {
  id: number;
  name: string;
  price: number;
  description: string;
  created_at: string;
}

export interface CreateProductParams {
  name: string;
  price: number;
  description: string;
}

export const productService = {
  // 獲取產品列表
  getProducts: async () => {
    try {
      const response = await api.get<Product[]>('/products');
      return response.data;
    } catch (error) {
      throw error;
    }
  },

  // 創建新產品
  createProduct: async (params: CreateProductParams) => {
    try {
      const response = await api.post<Product>('/products', params);
      return response.data;
    } catch (error) {
      throw error;
    }
  }
}; 