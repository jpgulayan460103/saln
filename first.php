<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
        @page { margin: 0px; }
        body { margin: 0px; }
        @font-face {
            font-family: 'Bookman Old Style Custom';
            src: url("http://saln.test/fonts/BOOKOS.ttf");
        }
        .page-1, .page-2{
            width: 612pt !important;
            height:916pt !important;
        }
        /* .page-1{
            background-image: url("http://saln.test/SALN-REVISED-2015-1.png");
            background-color: #cccccc;
            background-size: 612pt 916pt;
        }
        .page-2{
            background-image: url("http://saln.test/SALN-REVISED-2015-2.png");
            background-color: #cccccc;
            background-size: 612pt 916pt;
        } */
        .fillable{
            position: absolute;
            /* border: 1px solid black; */
        }
        #declarant-family-name{
            top: 120pt;
            left: 80pt;
            font-size: 8pt;
            width: 245pt;
            height: 118pt;
            text-align: center;
        }
        #declarant-table{
            top: 118pt;
            left: 80pt;
            font-size: 8pt;
            width: 245pt;
            height: 30pt;
            text-align: center;
        }
        #declarant-position-table{
            top: 118pt;
            left: 415pt;
            font-size: 8pt;
            width: 170pt;
            height: 30pt;
            text-align: center;
        }
        #declarant-office-table{
            top: 138pt;
            left: 415pt;
            font-size: 8pt;
            width: 170pt;
            height: 30pt;
            text-align: center;
        }
        #declarant-office-address-table{
            top: 173pt;
            left: 415pt;
            font-size: 8pt;
            width: 170pt;
            height: 30pt;
            text-align: center;
        }
        #spouse-table{
            top: 173pt;
            left: 80pt;
            font-size: 8pt;
            width: 245pt;
            height: 30pt;
            text-align: center;
        }
        .fillable tr td{
            vertical-align: bottom;
            line-height: 0.5;
            height: 30pt;
        }
        #declarant-address{
            top: 151pt;
            left: 85pt;
            font-size: 8pt;
            width: 240pt;
            height: 18pt;
            text-align: left,
        }


        #spouse-position-table{
            top: 174pt;
            left: 415pt;
            font-size: 8pt;
            width: 170pt;
            height: 30pt;
            text-align: center;
        }
        #spouse-office-table{
            top: 194pt;
            left: 415pt;
            font-size: 8pt;
            width: 170pt;
            height: 30pt;
            text-align: center;
        }
        #spouse-office-address-table{
            top: 229pt;
            left: 415pt;
            font-size: 8pt;
            width: 170pt;
            height: 30pt;
            text-align: center;
        }


        #children-name-table{
            top: 305pt;
            left: 45pt;
            font-size: 10pt;
            width: 515pt;
            text-align: center;
        }
        #children-name-table tr td{
            vertical-align: middle;
            height: 10pt;
        }

        #assets-real-properties-table{
            top: 508pt;
            left: 23pt;
            font-size: 12pt;
            width: 563pt;
            max-width: 563pt;
            text-align: center;
        }
        #assets-real-properties-table tr td{
            vertical-align: middle;
            height: 40pt;
            /* border: 1px solid black; */
            word-wrap: break-word !important;
        }

        #assets-personal-properties-table{
            top: 703pt;
            left: 23pt;
            font-size: 10pt;
            width: 563pt;
            max-width: 563pt;
            text-align: center;
        }
        #assets-personal-properties-table tr td{
            vertical-align: middle;
            height: 13pt;
            max-height: 13pt;
            /* border: 1px solid black; */
            word-wrap: break-word !important;
        }
        #assets-real-properties-total-table{
            top: 636pt;
            left: 502pt;
            font-size: 10pt;
            width: 80pt;
            max-width: 80pt;
            text-align: center;
        }
        #assets-real-properties-total-table tr td{
            vertical-align: middle;
            height: 13pt;
            max-height: 13pt;
            /* border: 1px solid black; */
            word-wrap: break-word !important;
        }
        #assets-personal-properties-total-table{
            top: 783pt;
            left: 23pt;
            font-size: 10pt;
            width: 563pt;
            max-width: 563pt;
            text-align: center;
        }
        #assets-personal-properties-total-table tr td{
            vertical-align: middle;
            height: 13pt;
            max-height: 13pt;
            /* border: 1px solid black; */
            word-wrap: break-word !important;
        }
        #liabilities-table{
            top: 72pt;
            left: 20pt;
            font-size: 12pt;
            width: 563pt;
            max-width: 563pt;
            text-align: center;
        }
        #liabilities-table tr td{
            vertical-align: middle;
            height: 13pt;
            max-height: 13pt;
            /* border: 1px solid black; */
            word-wrap: break-word !important;
        }
        #liabilities-total-table{
            top: 134pt;
            left: 20pt;
            font-size: 12pt;
            width: 563pt;
            max-width: 563pt;
            text-align: center;
        }
        #liabilities-total-table tr td{
            vertical-align: middle;
            height: 13pt;
            max-height: 13pt;
            /* border: 1px solid black; */
            word-wrap: break-word !important;
        }
        #business-interest-table{
            top: 293pt;
            left: 24pt;
            font-size: 12pt;
            width: 563pt;
            max-width: 563pt;
            text-align: center;
        }
        #business-interest-table tr td{
            vertical-align: middle;
            height: 13pt;
            max-height: 13pt;
            /* border: 1px solid black; */
            word-wrap: break-word !important;
        }
        #relative-government-table{
            top: 444pt;
            left: 24pt;
            font-size: 12pt;
            width: 568pt;
            max-width: 563pt;
            text-align: center;
        }
        #relative-government-table tr td{
            vertical-align: middle;
            height: 12pt;
            max-height: 13pt;
            /* border: 1px solid black; */
            word-wrap: break-word !important;
        }
        #date-signed-table{
            top: 671pt;
            left: 84pt;
            font-size: 12pt;
            width: 118pt;
            max-width: 563pt;
            text-align: center;
        }
        #date-signed-table tr td{
            vertical-align: middle;
            height: 12pt;
            max-height: 13pt;
            /* border: 1px solid black; */
            word-wrap: break-word !important;
        }
        #declarant-id-table{
            top: 734pt;
            left: 137pt;
            font-size: 8pt;
            width: 158pt;
            max-width: 563pt;
            text-align: center;
        }
        #declarant-id-table tr td{
            vertical-align: middle;
            height: 8pt;
            max-height: 8pt;
            /* border: 1px solid black; */
            word-wrap: break-word !important;
            padding: 0pt;
            margin: 0pt;
        }
        #declarant-spouse-id-table{
            top: 733pt;
            left: 423pt;
            font-size: 8pt;
            width: 158pt;
            max-width: 563pt;
            text-align: center;
        }
        #declarant-spouse-id-table tr td{
            vertical-align: middle;
            height: 8pt;
            max-height: 8pt;
            /* border: 1px solid black; */
            word-wrap: break-word !important;
            padding: 0pt;
            margin: 0pt;
        }
        #last-date-table{
            top: 787pt;
            left: 284pt;
            font-size: 8pt;
            width: 156pt;
            max-width: 156pt;
            text-align: center;
        }
        #last-date-table tr td{
            vertical-align: middle;
            height: 8pt;
            max-height: 8pt;
            /* border: 1px solid black; */
            word-wrap: break-word !important;
            padding: 0pt;
            margin: 0pt;
        }
        body {
            font-family: "Bookman Old Style Custom";
        }
    </style>
</head>
<body>
    <?php
        $file = $_GET['file'];
        $data = json_decode(file_get_contents('http://saln.test/json/'.$file.'.json'), true);
        if(isset($data['pageOneContents'])){
        foreach ($data['pageOneContents'] as $key => $pageOne) {
    ?>
    
    <div class="page-1">
        <img src="http://saln.test/SALN-REVISED-2015-1.png" style="width:612pt;height:936pt">
        
        <table id="declarant-table" class="fillable">
            <tr>
                <td style="width:60pt;max-width:60pt;"><?= isset($pageOne['declarant_family_name']) ? $pageOne['declarant_family_name'] : "<span></span>" ?></td>
                <td style="width:60pt;max-width:60pt;"><?= isset($pageOne['declarant_first_name']) ? $pageOne['declarant_first_name'] : "<span></span>" ?></td>
                <td style="width:30pt;max-width:30pt;"><?= isset($pageOne['declarant_mi']) ? $pageOne['declarant_mi'] : "<span></span>" ?></td>
            </tr>
        </table>
        <p class="fillable" id="declarant-address"><?= isset($pageOne['declarant_address']) ? $pageOne['declarant_address'] : "<span></span>" ?></p>
        <table id="spouse-table" class="fillable">
        <tr>
                <td style="width:60pt;max-width:60pt;"><?= isset($pageOne['spouse_family_name']) ? $pageOne['spouse_family_name'] : "<span></span>" ?></td>
                <td style="width:60pt;max-width:60pt;"><?= isset($pageOne['spouse_first_name']) ? $pageOne['spouse_first_name'] : "<span></span>" ?></td>
                <td style="width:30pt;max-width:30pt;"><?= isset($pageOne['spouse_mi']) ? $pageOne['spouse_mi'] : "<span></span>" ?></td>
            </tr>
        </table>
        <table id="declarant-position-table" class="fillable">
            <tr>
                <td><?= isset($pageOne['declarant_position']) ? $pageOne['declarant_position'] : "<span></span>" ?></td>
            </tr>
        </table>
        <table id="declarant-office-table" class="fillable">
            <tr>
                <td style="line-height:0.8"><?= isset($pageOne['declarant_agency_name']) ? $pageOne['declarant_agency_name'] : "<span></span>" ?></td>
            </tr>
        </table>
        <table id="declarant-office-address-table" class="fillable">
            <tr>
                <td style="line-height:0.8;vertical-align:top"><?= isset($pageOne['declarant_agency_address']) ? $pageOne['declarant_agency_address'] : "<span></span>" ?></td>
            </tr>
        </table>


        <table id="spouse-position-table" class="fillable">
            <tr>
                <td><?= isset($pageOne['spouse_position']) ? $pageOne['spouse_position'] : "<span></span>" ?></td>
            </tr>
        </table>
        <table id="spouse-office-table" class="fillable">
            <tr>
            <td style="line-height:0.8"><?= isset($pageOne['spouse_agency_name']) ? $pageOne['spouse_agency_name'] : "<span></span>" ?></td>
            </tr>
        </table>
        <table id="spouse-office-address-table" class="fillable">
            <tr>
            <td style="line-height:0.8;vertical-align:top"><?= isset($pageOne['spouse_agency_address']) ? $pageOne['spouse_agency_address'] : "<span></span>" ?></td>
            </tr>
        </table>

        <table id="children-name-table" class="fillable">
            <?php
                if($pageOne['unmarried_children'] != array()){
                foreach ($pageOne['unmarried_children'] as $unmarried_children) {
                    ?>
                    <tr>
                        <td style="width: 250pt"><?= isset($unmarried_children['name']) && $unmarried_children['name'] != "" ? $unmarried_children['name'] : "<span></span>" ?></td>
                        <td style="width: 150pt"><?= isset($unmarried_children['date_birth']) && $unmarried_children['date_birth'] != "" ? $unmarried_children['date_birth'] : "<span></span>" ?></td>
                        <td style="width: 95pt"><?= isset($unmarried_children['age']) && $unmarried_children['age'] != "" ? $unmarried_children['age'] : "<span></span>" ?></td>
                    </tr>
                    <?php }} ?>

            
        </table>


        <table id="assets-real-properties-table" class="fillable">
            <?php
                $total = 0;
                if($pageOne['assets_real'] != array()){
                foreach ($pageOne['assets_real'] as $assets_real) {
                    if(isset($assets_real['cost']) && $assets_real['cost'] != ""){
                        $total += $assets_real['cost'];
                    }
            ?>
            <tr>
                <td style="max-width:60pt;width:60pt;"><?= isset($assets_real['description']) && $assets_real['description'] != "" ? $assets_real['description'] : "<span></span>" ?></td>
                <td style="max-width:74pt;width:74pt;"><?= isset($assets_real['kind']) && $assets_real['kind'] != "" ? $assets_real['kind'] : "<span></span>" ?></td>
                <td style="max-width:106pt;width:106pt;"><?= isset($assets_real['location']) && $assets_real['location'] != "" ? $assets_real['location'] : "<span></span>" ?></td>
                <td style="max-width:55pt;width:55pt;"><?= isset($assets_real['assessed_value']) && $assets_real['assessed_value'] != "" ? $assets_real['assessed_value'] : "<span></span>" ?></td>
                <td style="max-width:73pt;width:73pt;"><?= isset($assets_real['market_value']) && $assets_real['market_value'] != "" ? $assets_real['market_value'] : "<span></span>" ?></td>
                <td style="max-width:32pt;width:32pt;"><?= isset($assets_real['year']) && $assets_real['year'] != "" ? $assets_real['year'] : "<span></span>" ?></td>
                <td style="max-width:45pt;width:45pt;"><?= isset($assets_real['mode']) && $assets_real['mode'] != "" ? $assets_real['mode'] : "<span></span>" ?></td>
                <td style="max-width:80pt;width:80pt;"><?= isset($assets_real['cost']) && $assets_real['cost'] != "" ? number_format($assets_real['cost'], 2) : "<span></span>" ?></td>
            </tr>
            <?php }} ?>

        </table>

        <table id="assets-real-properties-total-table" class="fillable">
            <tr>
                <td style="max-width:40pt;width:40pt;"><?= number_format($total, 2) ?></td>
            </tr>
        </table>


        <table id="assets-personal-properties-table" class="fillable">
            <?php
                $total = 0;
                if($pageOne['assets_personal'] != array()){
                foreach ($pageOne['assets_personal'] as $assets_personal) {
                    if(isset($assets_personal['cost']) && $assets_personal['cost'] != ""){
                        $total += $assets_personal['cost'];
                    }
            ?>
            <tr>
                <td style="max-width:160pt;width:160pt;"><?= isset($assets_personal['description']) && $assets_personal['description'] != "" ? $assets_personal['description'] : "<span></span>" ?></td>
                <td style="max-width:80pt;width:80pt;"><?= isset($assets_personal['year']) && $assets_personal['year'] != "" ? $assets_personal['year'] : "<span></span>" ?></td>
                <td style="max-width:40pt;width:40pt;"><?= isset($assets_personal['cost']) && $assets_personal['cost'] != "" ? number_format($assets_personal['cost'], 2) : "<span></span>" ?></td>
            </tr>
            <?php }} ?>
        </table>
        <table id="assets-personal-properties-total-table" class="fillable">
            <tr>
                <td style="max-width:160pt;width:160pt;"><span></span></td>
                <td style="max-width:80pt;width:80pt;"><span></span></td>
                <td style="max-width:40pt;width:40pt;"><?= number_format($total, 2) ?></td>
            </tr>
            <tr>
                <td style="max-width:160pt;width:160pt;height:30pt"><span></span></td>
                <td style="max-width:80pt;width:80pt;height:30pt"><span></span></td>
                <td style="max-width:40pt;width:40pt;height:30pt"><?= number_format($pageOne['totalAssets'], 2) ?></td>
            </tr>
        </table>
    </div>

    <?php }}   ?>

    <?php  
        if(isset($data['pageTwoContents'])){
        foreach ($data['pageTwoContents'] as $key => $pageTwo) {
    ?>
    <div class="page-2" >
    <img src="http://saln.test/SALN-REVISED-2015-2.png" style="width:612pt;height:936pt">
        <table id="liabilities-table" class="fillable">
            <?php
                $total = 0;
                if($pageTwo['liabilities'] != array()){
                foreach ($pageTwo['liabilities'] as $liabilities) {
                    if(isset($liabilities['outstanding_balance']) && $liabilities['outstanding_balance'] != ""){
                        $total += $liabilities['outstanding_balance'];
                    }
            ?>
            <tr>
                <td style="max-width:210pt;width:210pt;"><?= isset($liabilities['nature']) && $liabilities['nature'] != "" ? $liabilities['nature'] : "<span></span>" ?></td>
                <td style="max-width:230pt;width:230pt;"><?= isset($liabilities['creditors']) && $liabilities['creditors'] != "" ? $liabilities['creditors'] : "<span></span>" ?></td>
                <td style="max-width:110pt;width:110pt;"><?= isset($liabilities['outstanding_balance']) && $liabilities['outstanding_balance'] != "" ? number_format($liabilities['outstanding_balance'], 2) : "<span></span>" ?></td>
            </tr>
            <?php }} ?>
        </table>
        <table id="liabilities-total-table" class="fillable">
            <tr>
                <td style="max-width:210pt;width:210pt;"><span></span></td>
                <td style="max-width:230pt;width:230pt;"><span></span></td>
                <td style="max-width:110pt;width:110pt;"><?= number_format($total, 2) ?></td>
            </tr>
            <tr>
                <td style="max-width:210pt;width:210pt;"><span></span></td>
                <td style="max-width:230pt;width:230pt;"><span></span></td>
                <td style="max-width:110pt;width:110pt;"><?= number_format($pageTwo['totalNetworth'], 2) ?></td>
            </tr>
        </table>
        <table id="business-interest-table" class="fillable">
            <?php
                if($pageTwo['business_interest'] != array()){
                foreach ($pageTwo['business_interest'] as $business_interest) {
            ?>
            <tr>
                <td style="max-width:130pt;width:130pt;"><?= isset($business_interest['entity']) && $business_interest['entity'] != "" ? $business_interest['entity'] : "<span></span>" ?></td>
                <td style="max-width:145pt;width:145pt;"><?= isset($business_interest['address']) && $business_interest['address'] != "" ? $business_interest['address'] : "<span></span>" ?></td>
                <td style="max-width:140pt;width:140pt;"><?= isset($business_interest['nature']) && $business_interest['nature'] != "" ? $business_interest['nature'] : "<span></span>" ?></td>
                <td><?= isset($business_interest['date_acquired']) && $business_interest['date_acquired'] != "" ? $business_interest['date_acquired'] : "<span></span>" ?></td>
            </tr>
            <?php }} ?>
        </table>
        <table id="relative-government-table" class="fillable">
            <?php
                if($pageTwo['relatives'] != array()){
                foreach ($pageTwo['relatives'] as $relatives) {
            ?>
            <tr>
                <td style="max-width:148pt;width:148pt;"><?= isset($relatives['name']) && $relatives['name'] != "" ? $relatives['name'] : "<span></span>" ?></td>
                <td style="max-width:102pt;width:102pt;"><?= isset($relatives['relationship']) && $relatives['relationship'] != "" ? $relatives['relationship'] : "<span></span>" ?></td>
                <td style="max-width:85pt;width:85pt;"><?= isset($relatives['position']) && $relatives['position'] != "" ? $relatives['position'] : "<span></span>" ?></td>
                <td><?= isset($relatives['agency']) && $relatives['agency'] != "" ? $relatives['agency'] : "<span></span>" ?></td>
            </tr>
            <?php }} ?>
        </table>
        <table id="date-signed-table" class="fillable">
            <tr>
                <td><?= isset($pageTwo['date_completed_formatted']) ? $pageTwo['date_completed_formatted'] : "<span></span>" ?></td>
            </tr>
        </table>
        <table id="declarant-id-table" class="fillable">
            <tr>
                <td><?= isset($pageTwo['declarant_valid_id']) ? $pageTwo['declarant_valid_id'] : "<span></span>" ?></td>
            </tr>
            <tr>
                <td><?= isset($pageTwo['declarant_id_number']) ? $pageTwo['declarant_id_number'] : "<span></span>" ?></td>
            </tr>
            <tr>
                <td><?= isset($pageTwo['declarant_id_date']) ? $pageTwo['declarant_id_date'] : "<span></span>" ?></td>
            </tr>
        </table>
        <table id="declarant-spouse-id-table" class="fillable">
            <tr>
                <td><?= isset($pageTwo['codeclarant_valid_id']) ? $pageTwo['codeclarant_valid_id'] : "<span></span>" ?></td>
            </tr>
            <tr>
                <td><?= isset($pageTwo['codeclarant_id_number']) ? $pageTwo['codeclarant_id_number'] : "<span></span>" ?></td>
            </tr>
            <tr>
                <td><?= isset($pageTwo['codeclarant_id_date']) ? $pageTwo['codeclarant_id_date'] : "<span></span>" ?></td>
            </tr>
        </table>
        <table id="last-date-table" class="fillable">
            <tr>
                <td style="text-align:center;padding-left:3pt;width:20pt"><?= isset($pageTwo['date_completed_day']) ? $pageTwo['date_completed_day'] : "<span></span>" ?></td>
                <td style="text-align:center;padding-left:3pt;width:25pt"><span></span></td>
                <td style="text-align:center"><?= isset($pageTwo['date_completed_month']) ? $pageTwo['date_completed_month'] : "<span></span>" ?></td>
            </tr>
        </table>
    </div>
    <?php }}   ?>
</body>
</html>