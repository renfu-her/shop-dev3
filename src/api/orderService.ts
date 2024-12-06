import api from './config';
import { Order, CreateOrderParams } from '../types/order';

export const orderService = {
  // 獲取訂單列表
  getOrders: async () => {
    try {
      const response = await api.get<Order[]>('/orders');
      return response.data;
    } catch (error) {
      throw error;
    }
  },

  // 獲取單個訂單詳情
  getOrderById: async (orderId: number) => {
    try {
      const response = await api.get<Order>(`/orders/${orderId}`);
      return response.data;
    } catch (error) {
      throw error;
    }
  },

  // 創建訂單
  createOrder: async (params: CreateOrderParams) => {
    try {
      const response = await api.post<Order>('/orders', params);
      return response.data;
    } catch (error) {
      throw error;
    }
  },

  // 取消訂單
  cancelOrder: async (orderId: number) => {
    try {
      const response = await api.put<Order>(`/orders/${orderId}/cancel`);
      return response.data;
    } catch (error) {
      throw error;
    }
  }
}; 