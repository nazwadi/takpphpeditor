<div class="edit_form" style="width: 300px;">
    <div class="edit_form_header">
        Create a new Recipe
    </div>
    <div class="edit_form_content">
        <form method="post" action="index.php?editor=tradeskill&action=11">
            <label for="name">Recipe Name:</label> <br/>
            <input type="text" id="name" name="name" size="30" value=""><br/><br/>
            <label for="tradeskill">Tradeskill Used:</label> <br/>
            <select id="tradeskill" name='tradeskill'>
                <?php foreach ($tradeskills as $k => $v): ?>
                    <option value="<?= $k ?>"<?php echo (isset($ts) && $k == $ts) ? ' selected' : ''; ?>><?= $v ?></option>
                <?php endforeach; ?>
            </select><br/><br/>
            <label for="skillneeded">Min Skill Needed:</label> <br/>
            <input type="text" id="skillneeded" name="skillneeded" size="5" value="0"><br/><br/>
            <label for="trivial">Trivial:</label><br/>
            <input type="text" id="trivial" name="trivial" size="5" value="0"><br/><br/>
            <label for="nofail">Is Recipe No-fail?</label> <br/>
            <select id="nofail" name='nofail'>
                <option value="0">no</option>
                <option value="1">yes</option>
            </select><br/><br/>
            <label for="replace_container">Replace Combine Container?</label><br/>
            <select id="replace_container" name="replace_container">
                <option value="0">no</option>
                <option value="1">yes</option>
            </select><br/><br/>
            <label for="quest">Quest Controlled?</label> <br/>
            <select id="quest" name='quest'>
                <option value="0" selected>no</option>
                <option value="1">yes</option>
            </select><br/><br/>
            <label for="enabled">Enabled:</label><br/>
            <select id="enabled" name="enabled">
                <option value="0">no</option>
                <option value="1" selected>yes</option>
            </select><br/><br/>
            <label for="notes">Notes:</label><br/>
            <input type="text" id="notes" name="notes" size="30" value=""><br/><br/>
            <div class="center">
                <input type="submit" name="submit" value="Submit Changes">
            </div>
        </form>
    </div>
</div>
