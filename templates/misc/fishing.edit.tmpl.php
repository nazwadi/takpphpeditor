<div class="center">
    <iframe id='searchframe' src='templates/iframes/itemsearch.php'></iframe>
    <input id="button" type="button" value='Hide Item Search' onclick='hideSearch();'
           style='display:none; margin-bottom: 20px;'>
</div>

<form name="fishing" method="post"
      action=index.php?editor=misc&z=<?= $currzone ?? "" ?>&zoneid=<?= $currzoneid ?? "" ?>&action=3">
    <div class="edit_form" style="width: 200px;">
        <div class="edit_form_header">
            Edit Fishing Entry <?= $fsid ?? "" ?>
        </div>
        <div class="edit_form_content">
            <strong><label for="fiid">Item ID</label></strong> (<a href="javascript:showSearch();">search</a>)<br>
            <input class="indented" id="fiid" type="text" name="fiid" size="7" value="<?= $fiid ?? "" ?>"><br><br>
            <strong><label for="zoneid">Zone</label></strong><br>
            <input class="indented" id="zoneid" type="text" name="zoneid" size="7" value="<?= $zoneid ?>"><br><br>
            <strong><label for="skill_level">Skill Level</label></strong><br>
            <input class="indented" id="skill_level" type="text" name="skill_level" size="7"
                   value="<?= $skill_level ?? "" ?>"><br><br>
            <strong><label for="chance">Chance</label></strong><br>
            <input class="indented" id="chance" type="text" name="chance" size="7" value="<?= $chance ?? "" ?>">%<br><br>

            <div class="center">
                <input type="hidden" name="fsid" value="<?= $fsid ?? "" ?>">
                <input type="submit" value="Submit Changes">
            </div>
</form>
