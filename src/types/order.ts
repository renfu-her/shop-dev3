export interface Order {
  id: number;
  orderNumber: string;
  totalAmount: number;
  status: 'pending' | 'completed' | 'cancelled';
  items: OrderItem[];
  createdAt: string;
}

export interface OrderItem {
  id: number;
  productId: number;
  productName: string;
  quantity: number;
  price: number;
}

export interface CreateOrderParams {
  items: {
    productId: number;
    quantity: number;
  }[];
} 