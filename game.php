<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snake Game</title>
  <style>
    body {
      background-color: #f0f0f0;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    #game-board {
      width: 400px;
      height: 400px;
      border: 1px solid #000;
      display: grid;
      grid-template-columns: repeat(20, 1fr);
      grid-template-rows: repeat(20, 1fr);
      margin-bottom: 20px;
    }
    .cell {
      background-color: #fff;
      border: 1px solid #ccc;
    }
    .snake {
      background-color: green;
    }
    .food {
      background-color: red;
    }
    #instructions {
      text-align: center;
      font-family: Arial, sans-serif;
      margin-bottom: 20px;
    }
    #alert {
      position: fixed;
      top: 20px;
      right: 20px;
      background-color: green;
      color: #fff;
      padding: 10px 20px;
      border-radius: 5px;
      display: none;
    }
    button{
      font-size: 30px;
      background-color: green;
      border-color: 1px solid darkgreen;
      border-radius: 5px;
      padding: 5px;
    }
    button:hover{
      background-color: lightgreen;
      border-color: 1px solid green;
    }
    @keyframes wave {
        0%, 100% { transform: scale(1); opacity: 1; }
        50% { transform: scale(1.1); opacity: 0.7; }
    }
    .wave-effect {
        animation: wave 1.5s infinite;
    }
  </style>
</head>
<body>

<div class="navbar bg-base-100 bg-transparent fixed z-50">
  <div class="navbar-start">
    <h1>Murag bunag <button class="wave-effect"><a href="index.php" style="text-decoration: none; color: black;">LANDING PAGE</a></button> ning amaw.</h1>
  </div>
</div>

<div id="instructions">
  <h2>Snake Game Instructions</h2>
  <p>Use the arrow keys to control the snake:</p>
  <p>&#8592; Left | &#8593; Up | &#8594; Right | &#8595; Down</p>
  <p>Eat the red food to grow longer. Don't run into the walls or yourself!</p>
  <p>Press Space to restart after Game Over.</p>
</div>
<div id="game-board"></div>
<div id="alert">Game Over! Press Space to Restart.</div>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const board = document.getElementById('game-board');
    const alertBox = document.getElementById('alert');
    const rows = 20;
    const cols = 20;
    let snake = [{x: 10, y: 10}];
    let food = getRandomPosition();
    let direction = 'right';
    let gameLoop;

    function render() {
      board.innerHTML = '';

      for (let i = 0; i < rows; i++) {
        for (let j = 0; j < cols; j++) {
          const cell = document.createElement('div');
          cell.classList.add('cell');

          if (isSnake({x: j, y: i})) {
            cell.classList.add('snake');
          }

          if (food.x === j && food.y === i) {
            cell.classList.add('food');
          }

          board.appendChild(cell);
        }
      }
    }

    function isSnake(position) {
      return snake.some(part => part.x === position.x && part.y === position.y);
    }

    function getRandomPosition() {
      return {
        x: Math.floor(Math.random() * cols),
        y: Math.floor(Math.random() * rows)
      };
    }

    function update() {
      const head = snake[0];
      const newHead = {x: head.x, y: head.y};
      
      if (direction === 'right') newHead.x++;
      if (direction === 'left') newHead.x--;
      if (direction === 'up') newHead.y--;
      if (direction === 'down') newHead.y++;

      snake.unshift(newHead);

      if (newHead.x === food.x && newHead.y === food.y) {
        food = getRandomPosition();
      } else {
        snake.pop();
      }
    }

    function showAlert(message) {
      alertBox.textContent = message;
      alertBox.style.display = 'block';
    }

    function hideAlert() {
      alertBox.style.display = 'none';
    }

    function gameOver() {
      clearInterval(gameLoop);
      showAlert('Game Over! Press Space to Restart.');
      document.addEventListener('keydown', handleRestart);
    }

    function handleRestart(event) {
      if (event.code === 'Space') {
        hideAlert();
        snake = [{x: 10, y: 10}];
        food = getRandomPosition();
        direction = 'right';
        gameLoop = setInterval(loop, 100);
        render();
        document.removeEventListener('keydown', handleRestart);
      }
    }

    function loop() {
      update();
      render();
      const head = snake[0];
      if (head.x < 0 || head.y < 0 || head.x >= cols || head.y >= rows || snake.slice(1).some(part => part.x === head.x && part.y === head.y)) {
        gameOver();
      }
    }

    gameLoop = setInterval(loop, 100);

    document.addEventListener('keydown', (event) => {
      if (event.code === 'ArrowRight' && direction !== 'left') direction = 'right';
      if (event.code === 'ArrowLeft' && direction !== 'right') direction = 'left';
      if (event.code === 'ArrowUp' && direction !== 'down') direction = 'up';
      if (event.code === 'ArrowDown' && direction !== 'up') direction = 'down';
    });
  });
</script>
</body>
</html>
