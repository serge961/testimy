<div>
    <?=$title?>
</div>
<div class='container'>
    <div id="formmMess">
        <form>
            <p>Имя:</p>
            <p><input type='text' id='name' placeholder='Ваше имя'></p>
            <p>Отзыв:</p>
            <p><textarea id='message' placeholder='Напишите ваш отызв'></textarea></p>
            <button id="js-ajax-test">Отправить</button>
        </form>
    </div>
    <div id='messagePrint'>
        <table>
            <?php foreach ($data as $elem):?>
            <?php if (is_array($elem)){ ?>
            <?php foreach($elem as $elem1):?>
			<tr><td><?= $elem1['name']?></tr></td>
			<tr><td><?= $elem1['message']?></tr></td>
            <tr><td><?= $elem1['date']?></tr></td>
            <tr><td><?php endforeach; ?></tr></td>
            <?php }; ?>
		    <?php endforeach; ?>
            </table>
    </div>
<div>
<div>
<?=$messagejs?>
</div>