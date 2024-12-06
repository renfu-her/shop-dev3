import axios from 'axios';

const api = axios.create({
  baseURL: 'http://your-api-base-url/api', // 替換成你的 API 基礎 URL
  timeout: 10000,
  headers: {
    'Content-Type': 'application/json'
  }
});

export default api; 