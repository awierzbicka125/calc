{extends file="../templates/main.html"}
{block name=content}
<!-- Form -->
    <section>
        <h3>Wpisz dane do obliczeń</h3>
        <form method="post" action="{$app_url}/app1/BMIcalc.php">
            <div class="row gtr-uniform gtr-50">
                <div class="col-6 col-12-xsmall">
                    <input type="text" name="waga" id="waga" value="" placeholder="Waga" />
                </div>
                <div class="col-6 col-12-xsmall">
                    <input type="text" name="wzrost" id="wzrost" value="" placeholder="Wzrost" />
                </div>
				
                <div class="col-6 col-12-xsmall">
                {if isset($messages)}
	{if count($messages) > 0} 
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		{foreach  $messages as $msg}
		{strip}
			<li >{$msg}</li>
		{/strip}
		{/foreach}
		</ol>
	{/if}
{/if}


{if isset($infos)}
	{if count($infos) > 0} 
		<h4>Informacje: </h4>
		<ol class="inf">
		{foreach  $infos as $msg}
		{strip}
			<li>{$msg}</li>
		{/strip}
		{/foreach}
		</ol>
	{/if}
{/if}

{if isset($result)}
	<h4>Wynik</h4>
	<p class="res">
	Bmi = {$bmi|string_format:"%.2f"} {$result}
	</p>
{/if}
                </div>

                <div class="col-12">
                    <ul class="actions">
                        <li><input type="submit" value="Oblicz" class="primary" /></li>
                        <li><input type="reset" value="Reset" /></li>
                    </ul>
					
                </div>
            </div>
        </form>
		



    </section>
{/block}