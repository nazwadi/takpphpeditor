<form name="spawnpoint" method="post"
      action="index.php?editor=spawn&z=<?= $currzone ?? "" ?>&zoneid=<?= $currzoneid ?? "" ?>&npcid=<?= $npcid ?>&action=51">
    <div class="edit_form" style="width: 200px;">
        <div class="edit_form_header">
            Copy Spawnpoint ID: <?= $id ?>
        </div>
        <div class="edit_form_content">
            <div class="center">
                <span style="text-align: left; width: 17%;"><label for="sgid">Spawngroup ID:</label><input type="text"
                                                                                                           id="sgid"
                                                                                                           name="sgid"
                                                                                                           size="7"
                                                                                                           value=""></span>
                <br><br>
                <input type="submit" value="Copy Spawn">
                <input type="hidden" name="id" value="<?= $id ?? "" ?>">
                <input type="hidden" name="zone" value="<?= $zone ?>">
                <input type="hidden" name="x" value="<?= $x ?? "" ?>">
                <input type="hidden" name="y" value="<?= $y ?? "" ?>">
                <input type="hidden" name="z" value="<?= $z ?? "" ?>">
                <input type="hidden" name="heading" value="<?= $heading ?? "" ?>">
                <input type="hidden" name="respawntime" value="<?= $respawntime ?? "" ?>">
                <input type="hidden" name="variance" value="<?= $variance ?? "" ?>">
                <input type="hidden" name="pathgrid" value="<?= $pathgrid ?>">
                <input type="hidden" name="condition" value="<?= $_condition ?? "" ?>">
                <input type="hidden" name="cond_value" value="<?= $cond_value ?? "" ?>">
                <input type="hidden" name="enabled" value="<?= $enabled ?>">
                <input type="hidden" name="animation" value="<?= $animation ?? "" ?>">
                <input type="hidden" name="boot_respawntime" value="<?= $boot_respawntime ?? "" ?>">
                <input type="hidden" name="boot_variance" value="<?= $boot_variance ?? "" ?>">
                <input type="hidden" name="clear_timer_onboot" value="<?= $clear_timer_onboot ?? "" ?>">
            </div>
        </div>
    </div>
</form>
