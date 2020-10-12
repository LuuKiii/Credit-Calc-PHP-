<!doctype html>
{extends file="main.tpl"}
{block name=content}

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Kalkulator</title>
	<title>Kalkulator-Witamy-Test</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
        <link rel="stylesheet" href="{$app_url}/css/default.css">
</head>
<body>

<div style="margin: 50px 45%">
    
    
<form action="{$conf->action_root}calculate" method="post" class="pure-form pure-form-stacked">
	<fieldset>
		<label for="id_kwota">Kwota : </label>
                <input id="id_kwota" type="text" placeholder="Kwota" name="kwota" value="{$form->kwota}" />

		<label for="id_proc">z oprocentowaniem </label>
                <input id="id_proc" type="text" placeholder="%" name="proc" value="{$form->proc}" />                
                
		<label for="id_czas">Na czas: </label>
                <input id="id_czas" type="text" placeholder="---" name="czas" value="{$form->czas}" />
                
                
                <select name="jed" id="id_jed">
		<option value="r">lat</option>
		<option value="m">miesięcy</option>
		</select>

                

	</fieldset>	
	<input type="submit" value="Policz" class="pure-button pure-button-primary" />
</form>	
    
    
    

    
    
<div class="messages">
{if $msgs->isError()}
	<h4>Błędy : </h4>
	<ol id="err">
	{foreach  $msgs->getErrors() as $err}
	{strip}
		<li>{$err}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}


{if isset($res->result)}
	<h4>Wynik</h4>
	<p class="res">
        <label >Kwota do spłaty : </label>
	{$res->result}
        <label > Rata : </label>
         {$res->rata}
	</p>
{/if}

</div>
</div>
{/block}