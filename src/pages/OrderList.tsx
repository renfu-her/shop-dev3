import React, { useState, useEffect } from 'react';
import { orderService } from '../api/orderService';
import { Order } from '../types/order';

const OrderList: React.FC = () => {
  const [orders, setOrders] = useState<Order[]>([]);
  const [loading, setLoading] = useState(false);
  const [error, setError] = useState('');

  useEffect(() => {
    fetchOrders();
  }, []);

  const fetchOrders = async () => {
    try {
      setLoading(true);
      const data = await orderService.getOrders();
      setOrders(data);
    } catch (err: any) {
      setError(err.response?.data?.message || '獲取訂單失敗');
    } finally {
      setLoading(false);
    }
  };

  const handleCreateOrder = async () => {
    try {
      const newOrder = await orderService.createOrder({
        items: [
          {
            productId: 1,
            quantity: 2
          }
        ]
      });
      setOrders(prev => [...prev, newOrder]);
    } catch (err: any) {
      setError(err.response?.data?.message || '創建訂單失敗');
    }
  };

  const handleCancelOrder = async (orderId: number) => {
    try {
      await orderService.cancelOrder(orderId);
      // 重新獲取訂單列表
      fetchOrders();
    } catch (err: any) {
      setError(err.response?.data?.message || '取消訂單失敗');
    }
  };

  if (loading) return <div>載入中...</div>;
  if (error) return <div>錯誤：{error}</div>;

  return (
    <div className="order-list">
      <h2>訂單列表</h2>
      <button onClick={handleCreateOrder}>建立新訂單</button>
      
      {orders.map(order => (
        <div key={order.id} className="order-item">
          <h3>訂單編號：{order.orderNumber}</h3>
          <p>總金額：${order.totalAmount}</p>
          <p>狀態：{order.status}</p>
          <p>建立時間：{order.createdAt}</p>
          
          {order.status === 'pending' && (
            <button onClick={() => handleCancelOrder(order.id)}>
              取消訂單
            </button>
          )}
          
          <div className="order-items">
            <h4>訂單項目：</h4>
            {order.items.map(item => (
              <div key={item.id} className="item">
                <p>{item.productName}</p>
                <p>數量：{item.quantity}</p>
                <p>單價：${item.price}</p>
              </div>
            ))}
          </div>
        </div>
      ))}
    </div>
  );
};

export default OrderList; 