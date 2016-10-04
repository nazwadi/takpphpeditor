  <form name="npc_edit" method="post" action="index.php?editor=npc&z=<?=$currzone?>&zoneid=<?=$currzoneid?>&npcid=<?=$npcid?>&action=2">
    <div class="edit_form">
      <div class="edit_form_header">Edit NPC <?=$npcid?></div>
        <div class="edit_form_content">
          <center>
            <fieldset style="text-align: left;">
              <legend><strong><font size="4">General</font></strong></legend>
              <input type="hidden" name="id" value="<?=$npcid?>">
              <table width="100%">
                <tr>
                  <td valign="top">
                    NPC Name:<br/><input type="text" name="name" size="40" value="<?=$name?>"><br/><br/>
                    Title:<br/><input type="text" name="lastname" size="40" value="<?=$lastname?>"><br/><br/>
                    Level:<br/><input type="text" name="level" size="10" value="<?=$level?>"><br/><br/>
                    Max Level:<br/><input type="text" name="maxlevel" size="10" value="<?=$maxlevel?>"><br/><br/>
                  </td>
                  <td valign="top">
                    Race:<br/>
                    <select name="race" style="width: 265px;">
<?foreach($races as $key=>$value):?>
                      <option value="<?=$key?>"<?echo ($key == $race)? " selected" : "";?>><?=$key?>: <?=$value?></option>
<?endforeach;?>
                    </select><br/><br/>
                    Class:<br/>
                    <select name="class" style="width: 265px;">
<?foreach($classes as $key=>$value):?>
                      <option value="<?=$key?>"<?echo ($key == $class)? " selected" : "";?>><?=$key?>: <?=$value?></option>
<?endforeach;?>
                    </select><br/><br/>
                    Bodytype:<br/>
                    <select name="bodytype" style="width: 265px;">
<?foreach($bodytypes as $key=>$value):?>
                      <option value="<?=$key?>"<?echo ($key == $bodytype)? " selected" : "";?>><?=$key?>: <?=$value?></option>
<?endforeach;?>
                    </select><br/><br/>
                    Gender:<br/>
                    <select name="gender">
<?foreach($genders as $key=>$value):?>
                      <option value="<?=$key?>"<?echo ($key == $gender)? " selected" : "";?>><?=$value?></option>
<?endforeach;?>
                    </select>
                  </td>
                </tr>
              </table>
            </fieldset><br/>
          </center>
          <fieldset>
            <legend><strong><font size="4">Vitals</font></strong></legend>
            <table width="100%" border="0" cellpadding="3" cellspacing="0">
              <tr>
                <td align="left" width="17%">HP:      <br/><input type="text" name="hp" size="10" value="<?=$hp?>"></td>
                <td align="left" width="17%">Mana:    <br/><input type="text" name="mana" size="10" value="<?=$mana?>"></td>
                <td align="left" width="17%">AC:      <br/><input type="text" name="AC" size="10" value="<?=$AC?>"></td>
                <td align="left" width="17%">Scalerate:<br/><input type="text" name="scalerate" size="10" value="<?=$scalerate?>"></td>
                <td align="left" width="16%">Runspeed:<br/><input type="text" name="runspeed" size="10" value="<?=$runspeed?>"></td>
				<td align="left" width="16%">Walkspeed:   <br><input type="text" name="walkspeed" size="10" value="<?=$walkspeed?>"></td>
              </tr>
              <tr>
              	<td align="left">ATK:      <br/><input type="text" name="ATK" size="10" value="<?=$ATK?>"></td>
                <td align="left">Accuracy: <br/><input type="text" name="Accuracy" size="10" value="<?=$Accuracy?>"></td>
                <td align="left">See Invis:<br/><input type="text" name="see_invis" size="10" value="<?=$see_invis?>"></td>
                <td align="left">See ITU:  <br/><input type="text" name="see_invis_undead" size="10" value="<?=$see_invis_undead?>"></td>
                <td align="left">See Hide: <br/><input type="text" name="see_hide" size="10" value="<?=$see_hide?>"></td>
                <td align="left">See IH:   <br/><input type="text" name="see_improved_hide" size="10" value="<?=$see_improved_hide?>"></td>
              </tr>
            </table>
          </fieldset><br/>
          <fieldset>
            <legend><strong><font size="4">Stats</font></strong></legend>
            <table width="100%" border="0" cellpadding="3" cellspacing="0">
              <tr>
                <td align="left" width="14%">STR:<br/><input type="text" name="STR" size="5" value="<?=$STR?>"></td>
                <td align="left" width="14%">STA:<br/><input type="text" name="STA" size="5" value="<?=$STA?>"></td>
                <td align="left" width="14%">DEX:<br/><input type="text" name="DEX" size="5" value="<?=$DEX?>"></td>
                <td align="left" width="14%">AGI:<br/><input type="text" name="AGI" size="5" value="<?=$AGI?>"></td>
                <td align="left" width="14%">INT:<br/><input type="text" name="_INT" size="5" value="<?=$_INT?>"></td>
                <td align="left" width="15%">WIS:<br/><input type="text" name="WIS" size="5" value="<?=$WIS?>"></td>
                <td align="left" width="15%">CHA:<br/><input type="text" name="CHA" size="5" value="<?=$CHA?>"></td>
              </tr>
            </table>
          </fieldset><br/>
          <fieldset>
            <legend><strong><font size="4">Resists</font></strong></legend>
            <table width="100%" border="0" cellpadding="3" cellspacing="0">
              <tr>
                <td colspan="7">1 Resist = 0.5%<br/>200 Resist = 100%</td>
              </tr>
              <tr>
                <td align="left" width="14%">MR:      <br/><input type="text" name="MR" size="5" value="<?=$MR?>"></td>
                <td align="left" width="14%">CR:      <br/><input type="text" name="CR" size="5" value="<?=$CR?>"></td>
                <td align="left" width="14%">FR:      <br/><input type="text" name="FR" size="5" value="<?=$FR?>"></td>
                <td align="left" width="14%">PR:      <br/><input type="text" name="PR" size="5" value="<?=$PR?>"></td>
                <td align="left" width="14%">DR:      <br/><input type="text" name="DR" size="5" value="<?=$DR?>"></td>
		  <td align="left" width="15%">&nbsp;</td>
		  <td align="left" width="15%">&nbsp;</td>
              </tr>
            </table>
         </fieldset><br/>
         <fieldset>
           <legend><strong><font size="4">Combat</font></strong></legend>
             <table width="100%" border="0" cellpadding="3" cellspacing="0">
               <tr>
                <td align="left" width="14%">Min Dmg:     <br/><input type="text" name="mindmg" size="5" value="<?=$mindmg?>"></td>
                <td align="left" width="14%">HP Regen:    <br/><input type="text" name="hp_regen_rate" size="5" value="<?=$hp_regen_rate?>"></td>
                <td align="left" width="14%">Combat HP Regen:<br/><input type="text" name="combat_hp_regen" size="5" value="<?=$combat_hp_regen?>"></td>
				        <td align="left" width="14%">Aggroradius: <br/><input type="text" name="aggroradius" size="5" value="<?=$aggroradius?>"></td>
                <td align="left" width="14%">Attack Count:<br/><input type="text" name="attack_count" size="5" value="<?=$attack_count?>"></td>
              </tr>
              </tr>
                <td align="left" width="14%">Max Dmg:     <br/><input type="text" name="maxdmg" size="5" value="<?=$maxdmg?>"></td>
                <td align="left" width="14%">MP Regen:    <br/><input type="text" name="mana_regen_rate" size="5" value="<?=$mana_regen_rate?>"></td>
                <td align="left" width="14%">Combat MP Regen:<br/><input type="text" name="combat_mana_regen" size="5" value="<?=$combat_mana_regen?>"></td>
                <td align="left" width="14%">Assistradius:<br/><input type="text" name="assistradius" size="5" value="<?=$assistradius?>"></td>
                <td align="left" width="14%">Atk Delay:   <br/><input type="text" name="attack_delay" size="5" value="<?=$attack_delay?>"></td>
               </tr>
              </tr>
                <td align="left" width="14%">Loot ID:     <br/><input type="text" name="loottable_id" size="5" value="<?=$loottable_id?>"></td>
                <td align="left" width="14%">Spells ID:   <br/><input type="text" name="npc_spells_id" size="5" value="<?=$npc_spells_id?>"></td>
                <td align="left" width="15%">Heal Scale:  <br/><input type="text" name="healscale" size="5" value="<?=$healscale?>">%</td>
				        <td align="left" width="15%">Spell Scale: <br/><input type="text" name="spellscale" size="5" value="<?=$spellscale?>">%</td>
				        <td align="left" width="15%">Slow Mit:    <br/><input type="text" name="slow_mitigation" size="5" value="<?=$slow_mitigation?>"></td>
              </tr>
              </tr>
                <td align="left" width="14%">Ignore Distance:     <br/><input type="text" name="ignore_distance" size="5" value="<?=$ignore_distance?>"></td>
                <td align="left" width="14%">&nbsp;</td>
                <td align="left" width="15%">&nbsp;</td>
				        <td align="left" width="15%">&nbsp;</td>
				        <td align="left" width="15%">&nbsp;</td>
              </tr>
            </table>
            <center>
              <table cellpadding="20px">
                <tr>
<?
  $specabil = array();
  $specabilcont = array();

  for ($i = 1; $i <= 51; $i++) {
    if (preg_match("/^$i,/", $special_abilities) == 1) {
      $specabil[$i] = 1;
      // Leading special ability
      if (preg_match("/^$i,.+?\^/", $special_abilities, $match) == 1){
        $specabilcont[$i] = $match[0];
        $specabilcont[$i] = rtrim($specabilcont[$i], "^");
      }
      // Only special ability
      else {
        preg_match("/^$i,.+?\$/", $special_abilities, $match);
        $specabilcont[$i] = $match[0];
      }
    }
    elseif (preg_match("/\^$i,/", $special_abilities) == 1){
      $specabil[$i] = 1;
      // Middle special ability
      if (preg_match("/\^$i,.+?\^/", $special_abilities, $match) == 1){
        $specabilcont[$i] = $match[0];
        $specabilcont[$i] = trim($specabilcont[$i], "^");
      }
      // Trailing special ability
      else {
        preg_match("/\^$i,.+?\$/", $special_abilities, $match);
        $specabilcont[$i] = $match[0];
        $specabilcont[$i] = ltrim($specabilcont[$i], "^");
      }
    }
    else {
      $specabil[$i] = 0;
    }
  }
?>
                <td valign="top" align="left">
                  Summon (1):<br/><input type="text" name="1" size="10" value="<?=$specabilcont[1]?>"><br/>
                  Enrage (2):<br/><input type="text" name="2" size="10" value="<?=$specabilcont[2]?>"><br/>
                  Rampage (3):<br/><input type="text" name="3" size="10" value="<?=$specabilcont[3]?>"><br/>
                  AE Rampage (4):<br/><input type="text" name="4" size="10" value="<?=$specabilcont[4]?>"><br/>
                  Flurry (5):<br/><input type="text" name="5" size="10" value="<?=$specabilcont[5]?>"><br/>
                  Tunnel Vision (29):<br/><input type="text" name="29" size="10" value="<?=$specabilcont[29]?>"><br/>
                  Leashed (32):<br/><input type="text" name="32" size="10" value="<?=$specabilcont[32]?>"><br/>
                  Tethered (33):<br/><input type="text" name="33" size="10" value="<?=$specabilcont[33]?>"><br/>
                  Flee Percent (37):<br/><input type="text" name="37" size="10" value="<?=$specabilcont[37]?>"><br/>
                  Chase Distance (40):<br/><input type="text" name="40" size="10" value="<?=$specabilcont[40]?>"><br/>
                  Corpse Camper (49):<br/><input type="text" name="40" size="10" value="<?=$specabilcont[49]?>"><br/>
                </td>
                <td valign="top" align="left">
                  <input type="checkbox" name="6" value="6,1^"<?echo ($specabil[6] == 1) ? "checked" : "";?>>  Triple Attack<br/>
                  <input type="checkbox" name="7" value="7,1^"<?echo ($specabil[7] == 1) ? "checked" : "";?>>  Innate Dual Wield<br/>
                  <input type="checkbox" name="10" value="10,1^"<?echo ($specabil[10] == 1) ? "checked" : "";?>>  Magic Attack<br/>
                  <input type="checkbox" name="9" value="9,1^"<?echo ($specabil[9] == 1) ? "checked" : "";?>>  Bane Attack<br/>
                  <input type="checkbox" name="8" value="8,1^"<?echo ($specabil[8] == 1) ? "checked" : "";?>>  Do Not Equip Items<br/>
                  <input type="checkbox" name="11" value="11,1^"<?echo ($specabil[11] == 1) ? "checked" : "";?>>  Ranged Attack<br/>
                  <input type="checkbox" name="12" value="12,1^"<?echo ($specabil[12] == 1) ? "checked" : "";?>>  Unslowable<br/>
                  <input type="checkbox" name="50" value="50,1^"<?echo ($specabil[50] == 1) ? "checked" : "";?>>  Reverse Slow<br/>
                  <input type="checkbox" name="51" value="51,1^"<?echo ($specabil[51] == 1) ? "checked" : "";?>>  Immune to Haste<br/>
                  <input type="checkbox" name="13" value="13,1^"<?echo ($specabil[13] == 1) ? "checked" : "";?>>  Unmezable<br/>
                  <input type="checkbox" name="14" value="14,1^"<?echo ($specabil[14] == 1) ? "checked" : "";?>>  Uncharmable<br/>
                  <input type="checkbox" name="15" value="15,1^"<?echo ($specabil[15] == 1) ? "checked" : "";?>>  Unstunable<br/>
                  <input type="checkbox" name="16" value="16,1^"<?echo ($specabil[16] == 1) ? "checked" : "";?>>  Unsnareable<br/>
                  <input type="checkbox" name="17" value="17,1^"<?echo ($specabil[17] == 1) ? "checked" : "";?>>  Unfearable<br/>
                  <input type="checkbox" name="31" value="31,1^"<?echo ($specabil[31] == 1) ? "checked" : "";?>>  Unpacifiable<br/>
                  <input type="checkbox" name="18" value="18,1^"<?echo ($specabil[18] == 1) ? "checked" : "";?>>  Immune to Dispell<br/>
                  <input type="checkbox" name="35" value="35,1^"<?echo ($specabil[35] == 1) ? "checked" : "";?>>  No Harm from Players<br/>
		              <input type="checkbox" name="39" value="39,1^"<?echo ($specabil[39] == 1) ? "checked" : "";?>>  Disable Melee<br/>
                  <input type="checkbox" name="44" value="44,1^"<?echo ($specabil[44] == 1) ? "checked" : "";?>>  Use Warrior Skills<br/>
                  <input type="checkbox" name="47" value="47,1^"<?echo ($specabil[47] == 1) ? "checked" : "";?>>  Block handins if KOS<br/>
                  <input type="checkbox" name="48" value="48,1^"<?echo ($specabil[48] == 1) ? "checked" : "";?>>  PC Deathblow Leaves Corpse<br/>
                </td>
                <td valign="top" align="left">
                  <input type="checkbox" name="26" value="26,1^"<?echo ($specabil[26] == 1) ? "checked" : "";?>>  Resist Ranged Spells<br/>
                  <input type="checkbox" name="28" value="28,1^"<?echo ($specabil[28] == 1) ? "checked" : "";?>>  Immune to Taunt<br/>
                  <input type="checkbox" name="19" value="19,1^"<?echo ($specabil[19] == 1) ? "checked" : "";?>>  Immune to Melee<br/>
                  <input type="checkbox" name="20" value="20,1^"<?echo ($specabil[20] == 1) ? "checked" : "";?>>  Immune to Magic<br/>
                  <input type="checkbox" name="21" value="21,1^"<?echo ($specabil[21] == 1) ? "checked" : "";?>>  Immune to Fleeing<br/>
                  <input type="checkbox" name="23" value="23,1^"<?echo ($specabil[23] == 1) ? "checked" : "";?>>  Immune to non-Magical Melee<br/>
                  <input type="checkbox" name="22" value="22,1^"<?echo ($specabil[22] == 1) ? "checked" : "";?>>  Immune to non-Bane Melee<br/>
                  <input type="checkbox" name="24" value="24,1^"<?echo ($specabil[24] == 1) ? "checked" : "";?>>  Will Not Aggro<br/>
                  <input type="checkbox" name="25" value="25,1^"<?echo ($specabil[25] == 1) ? "checked" : "";?>>  Immune to Aggro<br/>
                  <input type="checkbox" name="27" value="27,1^"<?echo ($specabil[27] == 1) ? "checked" : "";?>>  See through Feign Death<br/>
                  <input type="checkbox" name="npc_aggro" value="1"<?echo ($npc_aggro == 1) ? "checked" : "";?>>  Can Aggro NPCs<br/>
                  <input type="checkbox" name="30" value="30,1^"<?echo ($specabil[30] == 1) ? "checked" : "";?>>  Does NOT buff/heal friends<br/>
                  <input type="checkbox" name="36" value="36,1^"<?echo ($specabil[36] == 1) ? "checked" : "";?>>  Always Flee<br/>
                  <input type="checkbox" name="45" value="45,1^"<?echo ($specabil[45] == 1) ? "checked" : "";?>>  Always Flee if Low Con<br/>
                  <input type="checkbox" name="46" value="46,1^"<?echo ($specabil[46] == 1) ? "checked" : "";?>>  No Loitering<br/>
		              <input type="checkbox" name="38" value="38,1^"<?echo ($specabil[38] == 1) ? "checked" : "";?>>  Allow Beneficial<br/>
                  <input type="checkbox" name="41" value="41,1^"<?echo ($specabil[41] == 1) ? "checked" : "";?>>  Allow Tank<br/>
		              <input type="checkbox" name="42" value="42,1^"<?echo ($specabil[42] == 1) ? "checked" : "";?>>  Proximity Aggro<br/>
                  <input type="checkbox" name="43" value="43,1^"<?echo ($specabil[43] == 1) ? "checked" : "";?>>  Always Call for Help<br/>
                </td>
              </tr>
            </table>
          </center>
        </fieldset><br/>
        <fieldset>
          <legend><strong><font size="4">Appearance</font></strong></legend>
          <table width="100%" border="0" cellpadding="3" cellspacing="0">
            <tr>
              <td align="left" width="17%">Size:       <br/><input type="text" name="size" size="10" value="<?=$size?>"></td>
              <td align="left" width="17%">Face:       <br/><input type="text" name="face" size="10" value="<?=$face?>"></td>
              <td align="left" width="16%">Haircolor:  <br/><input type="text" name="luclin_haircolor" size="10" value="<?=$luclin_haircolor?>"></td>
              <td align="left" width="16%">Hairstyle:  <br/><input type="text" name="luclin_hairstyle" size="10" value="<?=$luclin_hairstyle?>"></td>
              <td align="left" width="17%">Eyecolor:  <br/><input type="text" name="luclin_eyecolor" size="10" value="<?=$luclin_eyecolor?>"></td>
              <td align="left" width="17%">Eyecolor2: <br/><input type="text" name="luclin_eyecolor2" size="10" value="<?=$luclin_eyecolor2?>"></td>
            </tr>
            <tr>

              <td align="left" width="17%">Beard:     <br/><input type="text" name="luclin_beard" size="10" value="<?=$luclin_beard?>"></td>
              <td align="left" width="17%">Beardcolor:<br/><input type="text" name="luclin_beardcolor" size="10" value="<?=$luclin_beardcolor?>"></td>
              <td align="left" width="16%">Melee1:    <br/><input type="text" name="d_melee_texture1" size="10" value="<?=$d_melee_texture1?>"></td>
              <td align="left" width="16%">Melee2:    <br/><input type="text" name="d_melee_texture2" size="10" value="<?=$d_melee_texture2?>"></td>
              <td align="left" width="17%">&nbsp;</td>
		          <td align="left" width="17%">&nbsp;</td>
            </tr>
            <tr>
              <td align="left" width="17%">Armor Red:  <br/><input type="text" name="armortint_red" size="10" value="<?=$armortint_red?>"></td>
              <td align="left" width="17%">Armor Green:<br/><input type="text" name="armortint_green" size="10" value="<?=$armortint_green?>"></td>
              <td align="left" width="17%">Armor Blue: <br/><input type="text" name="armortint_blue" size="10" value="<?=$armortint_blue?>"></td>
			        <td align="left" width="17%">Light Source: <br/><input type="text" name="light" size="10" value="<?=$light?>"></td>
              <td align="left" width="16%">&nbsp;</td>
		          <td align="left" width="16%">&nbsp;</td>
             </tr>
             <tr>
              <td align="left" width="16%">Texture:    <br/><input type="text" name="texture" size="10" value="<?=$texture?>"></td>
              <td align="left" width="16%">HelmTexture:<br/><input type="text" name="helmtexture" size="10" value="<?=$helmtexture?>"></td>
              <td align="left" width="17%">ArmTexture:       <br/><input type="text" name="armtexture" size="10" value="<?=$armtexture?>"></td>
              <td align="left" width="17%">BracerTexture:    <br/><input type="text" name="bracertexture" size="10" value="<?=$bracertexture?>"></td>
              <td align="left" width="17%">HandTexture:<br/><input type="text" name="handtexture" size="10" value="<?=$handtexture?>"></td>
              <td align="left" width="17%">LegTexture:       <br/><input type="text" name="legtexture" size="10" value="<?=$legtexture?>"></td>
            </tr>
             <tr>  
              <td align="left" width="16%">FeetTexture:  <br/><input type="text" name="feettexture" size="10" value="<?=$feettexture?>"></td>
              <td align="left" width="16%">ChestTexture:  <br/><input type="text" name="chesttexture" size="10" value="<?=$chesttexture?>"></td>
              <td align="left" width="16%">&nbsp;</td>
		          <td align="left" width="16%">&nbsp;</td>
              <td align="left" width="17%">&nbsp;</td>
		          <td align="left" width="17%">&nbsp;</td>
            </tr>
          </table>
          <table width="100%" border="0" cellpadding="3" cellspacing="0">
            <tr>
              <td align="left" width="50%">
                Melee1 Type:<br/>
                <select name="prim_melee_type" style="width: 200px;">
<?foreach($skilltypes as $key=>$value):?>
                  <option value="<?=$key?>"<?echo ($key == $prim_melee_type)? " selected" : "";?>><?=$key?>: <?=$value?></option>
<?endforeach;?>
                </select>
              </td>
              <td align="left" width="50%">
                Melee2 Type:<br/>
                <select name="sec_melee_type" style="width: 200px;">
<?foreach($skilltypes as $key=>$value):?>
                  <option value="<?=$key?>"<?echo ($key == $sec_melee_type)? " selected" : "";?>><?=$key?>: <?=$value?></option>
<?endforeach;?>
                </select>
              </td>
            </tr>
          </table>
        </fieldset><br/>
        <fieldset>
          <legend><strong><font size="4">Misc</font></strong></legend>
          <table width="100%" border="0" cellpadding="3" cellspacing="0">
            <tr>
              <td align="left" width="17%">Spawn Limit:     <br/><input type="text" name="spawn_limit" size="10" value="<?=$spawn_limit?>"></td>
              <td align="left" width="17%">Version:         <br/><input type="text" name="version" size="10" value="<?=$version?>"></td>
              <td align="left" width="17%">Emote:           <br/><input type="text" name="emoteid" size="10" value="<?=$emoteid?>"></td>
              <td align="left" width="17%">No Target Hotkey:<br/><input type="text" name="no_target_hotkey" size="10" value="<?=$no_target_hotkey?>"></td>
              <td align="left" width="16%">Raid Target:     <br/><input type="text" name="raid_target" size="5" value="<?=$raid_target?>"></td>
              <td align="left" width="16%">Encounter:       <br/><input type="text" name="encounter" size="5" value="<?=$encounter?>"></td>
            </tr>
          </table><br/>
          <center>
            <table cellpadding="20px">
              <tr>
                <td valign="top" align="left">
                  <input type="checkbox" name="qglobal" value="1"<?echo ($qglobal == 1) ? " checked" : "";?>> Enable Quest Globals<br/>
                  <input type="checkbox" name="findable" value="1"<?echo ($findable == 1) ? " checked" : "";?>> NPC is Findable<br/>
                  <input type="checkbox" name="trackable" value="1"<?echo ($trackable == 1) ? " checked" : "";?>> NPC is Trackable<br/>
                </td>
                <td valign="top" align="left">
                  <input type="checkbox" name="pet" value="1"<?echo ($pet == 1) ? " checked" : "";?>> NPC is a Pet<br/>
                  <input type="checkbox" name="private_corpse" value="1"<?echo ($private_corpse == 1) ? " checked" : "";?>> Corpse does not Unlock<br/>
                  <input type="checkbox" name="unique_spawn_by_name" value="1"<?echo ($unique_spawn_by_name == 1) ? " checked" : "";?>> Unique by Name<br/>
                </td>
                <td valign="top" align="left">
                  <input type="checkbox" name="underwater" value="1"<?echo ($underwater == 1) ? " checked" : "";?>> Underwater NPC<br/>
                  <input type="checkbox" name="34" value="34,1^"<?echo ($specabil[34] == 1) ? "checked" : "";?>>  Destructible Object<br/>
                  <input type="checkbox" name="isquest" value="1"<?echo ($isquest == 1) ? " checked" : "";?>> Has Quest File<br/>
                </td>
                <td valign="top" align="left">
                  <input type="checkbox" name="ignore_despawn" value="1"<?echo ($ignore_despawn == 1) ? " checked" : "";?>> Ignore Despawn<br/>
                </td>
              </tr>
            </table>
          </center>
        </fieldset><br/>
        <center>
          <input type="submit" value="Submit Changes">
        </center>
      </div>
    </div>
  </form>
