<?php

function populate_catlist()
{
	global $link;

	$query = 'SELECT name FROM cat ORDER BY name';
	$result = mysqli_query($link, $query);
	while ($cat = mysqli_fetch_row($result))
		echo '<input style="margin-left: 2%;" type="submit" class="btn btn-primary shadow px-5 py-2 mt-2 rounded d-block d-sm-inline-block" name="cat" value="'.$cat[0].'" />';
}

function populate_allitems()
{
	global $link;

	$query = 'SELECT * FROM item';
	$result = mysqli_query($link, $query);
	$nbprod = mysqli_query($link, 'SELECT COUNT(*) FROM item');
	echo '<span style="color: gray; font-size: 14px; font-weight: 500;">'.mysqli_fetch_row($nbprod)[0].' RESULTS FOUND</span>';
	while ($cat = mysqli_fetch_row($result))
		echo '
	<div class="itemlist">
				<span><h3 style="display:inline;">'.$cat[1].'</h3><h6 style="display:inline; margin-left: 1%;"><a href="#"><u>View Media Kit</u></a></h6></span>
				<div class="col-lg-12" style="background-color: white;"><br>
        		<div class="row">
          		<div class="col-lg-2" style="margin-right: 2%;">
            	<a href="#" class="thumbnail"><img src="https://via.placeholder.com/160x210"></a>
          		</div>
          		<div class="col-lg-2">
            	<div><span><strong>FREQUENCY <br></strong></span> Biannually</div><br>
           	    <div><span><strong>VOLUMES <br></strong></span> 5</div><br>
            	<div><span><strong>IMPACT FACTOR <br></strong>'.$cat[4].'</span></div>
            	</div>
          		<div class="col-lg-3">
            	<div><span><strong>TOTAL CIRCULATION <br></strong></span> 5,369</div><br>
            	<div><span><strong>AVERAGE MONTHLY VISITS <br></strong>'.$cat[5].'</span></div><br>
            	<div><span><strong>SOCIETIES <br></strong>'.$cat[6].'</span></div>
          		</div>
          		<div class="col-lg-4">
            	<div class="result-field"><span><strong>SPECIALTY <br></strong>Nursing, Emergency Medicine</span></div><br>
            	<div><span><strong>AUDIENCE <br></strong>Physicians, nurses, paramedics, pilots, communications, center specialists, and program directors who work in critical care and patient transportation.</span></div>
          		</div>
        		</div><br>
      			</div>
			</div>
			<hr>
	';
}

// function populate_uncategorized()
// {
// 	global $link;

// 	$query = 'SELECT * FROM item WHERE item_id NOT IN (SELECT item_id FROM item_cat)';
// 	$result = mysqli_query($link, $query);
// 	$nbprod = mysqli_query($link, 'SELECT COUNT(*) FROM item WHERE item_id NOT IN (SELECT item_id FROM item_cat)');
// 	echo '<h3>Results Found: '.mysqli_fetch_row($nbprod)[0]."</h3><hr>";
// 	while ($cat = mysqli_fetch_row($result))
// 		echo '
// 	<div class="itemlist">
// 		<div class="itemname">'.$cat[1].'</div>
// 		<div><strong>Frequency: </strong>Biannually</div>
// 		<div><strong>Volumes: </strong>5</div>
// 		<div class="itemimpact"><strong>Impact Factor: </strong>'.$cat[3].'</div>
// 		<div><strong>Total Circulation: </strong>5,369</div>
// 		<div class="itemmv"><strong>Average Monthly Visits: </strong>'.$cat[5].'</div>
// 		<div class="itemmv"><strong>Society: </strong>'.$cat[6].'</div>
// 		<div><strong>Specialty: </strong> Nursing, Emergency Medicine</div>
// 		<div><strong>Audience: </strong> Physicians, nurses, paramedics, pilots, communications center specialists, and program directors who work in critical care and patient transportation.</div>
// 	</div>
// 	<hr>
// 	';
// }

function populate_category()
{
	global $link;

	$query = 'SELECT cat_id from cat WHERE name="'.$_GET['cat'].'"';
	$result = mysqli_query($link, $query);
	$cat_id = mysqli_fetch_row($result)[0];
	$query =	'select item.*
				from item
				join item_cat on item.item_id=item_cat.item_id
				join cat on item_cat.cat_id=cat.cat_id
				where cat.cat_id='.$cat_id;
	$result = mysqli_query($link, $query);
	$nbprod = mysqli_query($link, 'SELECT COUNT(*) FROM item_cat WHERE cat_id="'.$cat_id.'"');
	// echo '<h3 style="color: gray; font-size: 10px;">RESULTS FOUND: '.mysqli_fetch_row($nbprod)[0]."</h3>";
	echo '<span style="color: gray; font-size: 14px; font-weight: 500;">'.mysqli_fetch_row($nbprod)[0].' RESULTS FOUND</span>';
	echo '
	<div style="box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.15);">
	<div class="col-lg-12">
        <div class="row" style="padding: 2%; font-weight: bold; font-size: 14px;">
          <div class="col-lg-3">
            <span>GLOBAL REACH<br><span style="font-size: 24px">6</span></span>
          </div>
          <div class="col-lg-3">
            <span>REGIONAL BREAKDOWN</span><br>
            <span><span style="font-size: 22px">10% </span>APAC</span><br>
            <span><span style="font-size: 22px">40% </span>EMEA</span><br>
            <span><span style="font-size: 22px">30% </span>Americas</span><br>
            <span><span style="font-size: 22px">20% </span>ANZ</span>
          </div>
          <div class="col-lg-3">
            <span>NUMBER OF JOURNALS<br><span style="font-size: 26px">16</span><br><br>NUMBER OF JOURNALS RANKING TOP 10 IN THE JCR<br><span style="font-size: 26px">5</span></span>
          </div>
          <div class="col-lg-3">
            <span>NUMBER OF SOCIETY PARTNERS<br><span style="font-size: 26px">10</span><br><br>E-NEWSLETTER SUBSCRIBERS<br><span style="font-size: 26px">6.27k</span></span>
          </div>
        </div>
      </div>
	</div><br>
	';
	while ($cat = mysqli_fetch_row($result))
		echo '
		<div class="itemlist">
				<span><h3 style="display:inline;">'.$cat[1].'</h3><h6 style="display:inline; margin-left: 1%;"><a href="#"><u>View Media Kit</u></a></h6></span>
				<div class="col-lg-12" style="background-color: white;"><br>
        		<div class="row">
          		<div class="col-lg-2" style="margin-right: 2%;">
            	<a href="#" class="thumbnail"><img src="https://via.placeholder.com/160x210"></a>
          		</div>
          		<div class="col-lg-2">
            	<div><span><strong>FREQUENCY <br></strong></span> Biannually</div><br>
           	    <div><span><strong>VOLUMES <br></strong></span> 5</div><br>
            	<div><span><strong>IMPACT FACTOR <br></strong>'.$cat[4].'</span></div>
            	</div>
          		<div class="col-lg-3">
            	<div><span><strong>TOTAL CIRCULATION <br></strong></span> 5,369</div><br>
            	<div><span><strong>AVERAGE MONTHLY VISITS <br></strong>'.$cat[5].'</span></div><br>
            	<div><span><strong>SOCIETIES <br></strong>'.$cat[6].'</span></div>
          		</div>
          		<div class="col-lg-4">
            	<div class="result-field"><span><strong>SPECIALTY <br></strong>Nursing, Emergency Medicine</span></div><br>
            	<div><span><strong>AUDIENCE <br></strong>Physicians, nurses, paramedics, pilots, communications, center specialists, and program directors who work in critical care and patient transportation.</span></div>
          		</div>
        		</div><br>
      			</div>
			</div>
			<hr>
		';
}

function populate_search()
{
	global $link;

	$query = 'SELECT * FROM item';
	$result = mysqli_query($link, $query);
	$nbprod = mysqli_query($link, 'SELECT COUNT(*) FROM `item` WHERE name LIKE "%'.$_GET['searchtext'].'%"');

	if (!isset($_GET['searchtext']) || $_GET['searchtext'] == '')
	{
		unset($_GET['searchtext'], $_GET['submitsearch']);
		populate_main();
	}
	else
	{

		echo '<h2>Search results for "'.$_GET['searchtext'].'"</h2><hr>';
		// echo '<h2>'.mysqli_fetch_row($result)[0].' Results found for "'.$_GET['searchtext'].'"</h2>';
		$result = mysqli_query($link, 'SELECT * FROM `item` WHERE name OR field LIKE "%'.$_GET['searchtext'].'%"');
		if ($cat = mysqli_fetch_row($result))
		{
			echo '
			<div class="itemlist">
				<span><h3 style="display:inline;">'.$cat[1].'</h3><h6 style="display:inline; margin-left: 1%;"><a href="#"><u>View Media Kit</u></a></h6></span>
				<div class="col-lg-12" style="background-color: white;"><br>
        		<div class="row">
          		<div class="col-lg-2" style="margin-right: 2%;">
            	<a href="#" class="thumbnail"><img src="https://via.placeholder.com/160x210"></a>
          		</div>
          		<div class="col-lg-2">
            	<div><span><strong>FREQUENCY <br></strong></span> Biannually</div><br>
           	    <div><span><strong>VOLUMES <br></strong></span> 5</div><br>
            	<div><span><strong>IMPACT FACTOR <br></strong>'.$cat[4].'</span></div>
            	</div>
          		<div class="col-lg-3">
            	<div><span><strong>TOTAL CIRCULATION <br></strong></span> 5,369</div><br>
            	<div><span><strong>AVERAGE MONTHLY VISITS <br></strong>'.$cat[5].'</span></div><br>
            	<div><span><strong>SOCIETIES <br></strong>'.$cat[6].'</span></div>
          		</div>
          		<div class="col-lg-4">
            	<div class="result-field"><span><strong>SPECIALTY <br></strong>Nursing, Emergency Medicine</span></div><br>
            	<div><span><strong>AUDIENCE <br></strong>Physicians, nurses, paramedics, pilots, communications, center specialists, and program directors who work in critical care and patient transportation.</span></div>
          		</div>
        		</div><br>
      			</div>
			</div>
			<hr>
			';
			while ($cat = mysqli_fetch_row($result))
				echo '
			<div class="itemlist">
				<span><h3 style="display:inline;">'.$cat[1].'</h3><h6 style="display:inline; margin-left: 1%;"><a href="#"><u>View Media Kit</u></a></h6></span>
				<div class="col-lg-12" style="background-color: white;"><br>
        		<div class="row">
          		<div class="col-lg-2" style="margin-right: 2%;">
            	<a href="#" class="thumbnail"><img src="https://via.placeholder.com/160x210"></a>
          		</div>
          		<div class="col-lg-2">
            	<div><span><strong>FREQUENCY <br></strong></span> Biannually</div><br>
           	    <div><span><strong>VOLUMES <br></strong></span> 5</div><br>
            	<div><span><strong>IMPACT FACTOR <br></strong>'.$cat[4].'</span></div>
            	</div>
          		<div class="col-lg-3">
            	<div><span><strong>TOTAL CIRCULATION <br></strong></span> 5,369</div><br>
            	<div><span><strong>AVERAGE MONTHLY VISITS <br></strong>'.$cat[5].'</span></div><br>
            	<div><span><strong>SOCIETIES <br></strong>'.$cat[6].'</span></div>
          		</div>
          		<div class="col-lg-4">
            	<div class="result-field"><span><strong>SPECIALTY <br></strong>Nursing, Emergency Medicine</span></div><br>
            	<div><span><strong>AUDIENCE <br></strong>Physicians, nurses, paramedics, pilots, communications, center specialists, and program directors who work in critical care and patient transportation.</span></div>
          		</div>
        		</div><br>
      			</div>
			</div>
			<hr>
			';
		}
		else
		{
			echo "<h2 class='text-center' style='padding: 5% 0 5% 0; color: black;'>We're sorry. We cannot find any matches for your search term.<br>Please try another keyword.</h2><hr>";
			unset($_GET['searchtext'], $_GET['submitsearch']);
			populate_main();
		}
	}
}

function populate_main()
{

	if (isset($_GET['submitsearch']))
		populate_search();
	else if (isset($_GET['cat']) && $_GET['cat'] != 'Home')
	{
		if ($_GET['cat'] == 'Info')
			echo '<div>Info</div>';
		else if ($_GET['cat'] == 'All Journals')
			populate_allitems();
		else if ($_GET['cat'] == 'Uncategorized')
			populate_uncategorized();
		else
			populate_category();	
	}
	// else
	// 	populate_home();

}
?>