<?php require_once ('header.php')?>
<h1 class="big">Личные данные</h1>
<p><b>Фамилия:</b>Лучко</p>
<p><b>Имя:</b>Игорь</p>
<p><b>Дата рождения:</b>26.03.1985</p>
<p><b>Пол:</b>мужской</p>
<p><b>Желаемая должность:</b>Junior PHP Developer</p>
<p><b>Страна:</b>украина</p>
<p><b>Адрес электронной почты:</b>ig1985@mail.ua</p>
<p><b>Мобильный телефон:</b>0978968663</p>
<div class="container">
  <b> Я есть &nbsp;&nbsp;</b>
 <a href="https://vk.com/id132795358"> <img src="image/w128h341371236209PolnylogotipVKontakte128.png" class="img-thumbnail" alt="Cinque Terre" width="100" height="20"></a>
</div>
<div class="container">
  <h3 style ="color:#1ab2ff">Написать письмо</h3>
  
  <form action = "mail.php" method = "post">
    <div class="form-group">
      <label for="comment"></label>
      <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
	  <label for="usr">Тема:</label>
      <input type="text" class="form-control" id="usr" name="subject">
	  
    </div>
	<input type="submit" class="btn btn-info" value="Отправить">
  </form>
</div>
<?php require_once ('footer.php')?>
<h3><a href="index.php"><<<Главная</a></h3>
