// Импортируем необходимые модули
const express = require('express');
const http = require('http');
const socketIO = require('socket.io');

// Создаем приложение Express и прослушиваем сервер HTTP
const app = express();
const server = http.createServer(app);
const io = socketIO(server);

// Подключаем статические файлы (HTML, CSS, JS) из папки "public"
app.use(express.static('public'));

// Обрабатываем соединение сокета
io.on('connection', (socket) => {
  console.log('Пользователь подключился:', socket.id);

  // Обрабатываем сообщения от клиента
  socket.on('chatMessage', (message) => {
    console.log('Получено сообщение:', message);

    // Отправляем сообщение всем подключенным пользователям
    io.emit('chatMessage', message);
  });

  // Обрабатываем отключение пользователя
  socket.on('disconnect', () => {
    console.log('Пользователь отключился:', socket.id);
  });
});

// Запускаем сервер на порту 3000
server.listen(3000, () => {
  console.log('Сервер запущен на порту 3000');
});