<h2>Добавить категорию</h2>
<div id="blockNewCategory">
    Новая категория:<br>
    <input name="newCategoryName" id="newCategoryName" type="text" value="">
    <br><br>

    Является подкатегорией для:<br>
    <select name="generalCatId">
        <option value="0">Главная категория</option>
            {foreach $rsCategories as $item}
            <option value="{$item['id']}">{$item['name']}</option>
            {/foreach}
    </select>
    <br><br>
    <input type="button" onclick="newCategory();" value="Добавить категорию">

</div>