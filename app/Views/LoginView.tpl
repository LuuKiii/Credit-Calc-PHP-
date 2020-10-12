{extends file="main.tpl"}
{block name=content}

<div style="margin: 10px 20%">
<form action="{$conf->action_url}login" method="post"  class="pure-form pure-form-aligned bottom-margin">
	<fieldset>
			<label for="id_login">Login: </label>
			<input id="id_login" type="text" name="login"/>
			<label for="id_pass">Hasło: </label>
			<input id="id_pass" type="password" name="pass" /><br />
	</fieldset>
        <input type="submit" value="Zaloguj" class="pure-button pure-button-primary"/>
</form>	
 </div> 
<div class="messages" style="margin: 50px 20%">
{if $msgs->isError()}
	<h4>Błąd </h4>
	<ol id="err">
	{foreach  $msgs->getErrors() as $err}
	
		<li>{$err}</li>
	
	{/foreach}
	</ol>
{/if}



</div>

{/block}