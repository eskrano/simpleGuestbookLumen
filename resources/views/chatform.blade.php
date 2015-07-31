

<div class ="container">
	<form action="/chat" method="POST">
	  <div class="form-group">
	    <label for="name">Имя:</label>
	    <input type="text" class="form-control" id="name" name ="name" placeholder="Введите имя:">
	  </div>
	  <div class="form-group">
	    <label for="message">Сообщение:</label>
	    <textarea id ="message" name ="message" class ="form-control" rows="4" placeholder="Введите сообщение"></textarea>
	  </div>
	  <button type="submit" class="btn btn-default">Добавить сообщение в чат</button>
	</form>
</div>
