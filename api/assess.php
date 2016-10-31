<?php
include '../config.php';
$conn = getDatabaseConnection();

echo json_encode($_GET);
//
// //if(isset($_POST['redAssessReturn']) || isset($_POST['whiteAssessReturn'])  ){
//     echo "Form filled out \n";
//     // TODO: add logic to determine if user is signed in or not
//     // TODO:
//     //$username = $_POST['username'];
//     //$wine_producer = $_POST['wine_producer'];
//     //$wine_name = $_POST['wine_name'];
//     //$wine_vintage = $_POST['wine_vintage'];
//
//     $date = date("Y-m-d H:i:s", time());
//     echo "DATE: " . $date;
//     $phpdate = strtotime($date);
//     echo "DATE 2: " . $phpdate;
//     $sql = "INSERT INTO assessment (date, producer, wine_name, vintage) VALUES (FROM_UNIXTIME($phpdate), 'Producer', 'Name', 1234);";
//     //$sql = "INSERT INTO assessment VALUES $date, $wine_producer, $wine_name, $wine_vintage";
// 	$statement = $conn->prepare($sql);
//     $statement->execute();
//
//
//    // UNIX_TIMESTAMP(datetimefield)
//     $taste_id = "SELECT assessment_id from assessment WHERE date = $date;";
//         $statement = $conn->prepare($taste_id); // prevents sql injection
//         $statement->execute();
//         $record = $statement->fetch(PDO::FETCH_ASSOC);
//         echo "Taste id: " . $record;
//
//
//         echo "Primary Color: " . $_POST['primary_color'];
//         echo "Secondary Color: " . $_POST['secondary_color'];
//         echo "Red Fruits Level: " . $_POST['red_fruits_level'];
//     //echo $_POST['taste_id'];
//
//
//     //if(isset($_POST['redAssessForm']){
//         /*
//         $sql = "INSERT INTO red_taste_assessment
//            VALUES
//         (:taste_id, :primary_color, :secondary_color, :red_fruits_level, :red_cherry, :pomegranate,
//         :cranberry, :raspberry, :red_currant, :red_fruit_other, :black_fruit_level, :black_berry, :black_currant,
//         :raisin,:date, :fig, :black_fruit_other, :blue_fruit_level, :blueberry,:dried_blueberry, :plum, :plum_skin,
//         :blue_fruit_other,:fruit_type, :flowers_level, :rose, :violet,:lavender, :dried_flowers, :potpourri,
//         :flowers_other,:herbs_level, :fresh_herbs, :dried_herbs, :tomatoe_leaf, :basil, :oregeno, :fennel,
//         :herbs_other, :vegetal_level, :green_bell_pepper_capsicum, :vegetal_fresh_herbs, :vegetal_dried_herbs,
//         :stem_whole_cluster, :vegetal_other, :mint_eucalyptus_level, :mint, :eucalyptus,
//         :menthol, :mint_eucalyptus_other, :pepper_spice_level, :black_peppercorn, :green_peppercorn,
//         :cinnamon, :baking_spice, :hard_spice, :anise_licorice, :pepper_spice_other, :cocoa_coffee_level,
//         :dark_chocolate, :cocoa_powder, :mocha, :espresso, :coffee_grounds, :cocoa_coffee_other, :meat_leather_level,
//         :meat, :grilled_meat, :beef_jerkey, :wet_leather, :dried_leather, :meat_leather_other, :tobacco_tar_level,
//         :wet_tobacco, :dried_tobacco, :tar, :ashtray, :tobacco_tar_other, :earth_leaves_mushrooms_level, :forest_floor,
//         :compost, :mushrooms, :potting_soil, :barnyard, :wet_leaves, :dried_leaves, :earth_leaves_mushrooms_other,
//         :mineral_stone_sulfur_level, :sulfur, :slate_petrol, :metallic, :flit, :dust, :chalk, :limestone,
//         :volcanic, :smokey, :pencil_lead, :mineral_stone_sulfur_other, :oak_vanilla_smoke_coconut_level,
//         :coconut, :light_toast, :heavy_toast, :sawdust, :sandalwood, :pencil_shavings,
//         :oak_vanilla_smoke_coconut_other,
//         :sweetness, :alcohol, :tannin, :bitter, :balanced, :length, :complexity,
//         :quality_for_price,:quality_for_price_rate);";
//         */
//
//
//         /*
//         $sql = "INSERT INTO red_taste_assessment
//            VALUES
//         ($taste_id, :primary_color, :secondary_color, :red_fruits_level,
//         1, 1, 1, 1,
//         1, '*', 1, 1,
//         1, 1, 1, 1,
//         '*', 1, 1, 1,
//         1, 1, '*', 1,
//         1, 1, 1, 1,
//         1, 1,'*', 1,
//         1, 1, 1, 1,
//         1, 1,'*', 1,
//
//
//         1, 1, 1, 1,
//         '*', 1, 1, 1,
//
//
//         '*', 1, 1, 1,
//         1, 1, 1, 1,
//
//         '*', 1, 1, 1,
//
//         1, 1, 1, '*',
//         1, 1, 1, 1,
//         1, 1, '*', 1,
//         1, 1, 1, 1,
//         1, '*', 1, 1,
//         1, 1, 1, 1,
//         1, 1, '*', 1,
//         1, 1, 1, 1,
//         1, 1, 1, 1,
//         1, 1, '*', 1,
//         1, 1, 1, 1,
//         1, 1, '*', 1,
//         1, 1, 1, 1,
//         1, 1, 1, 1);";
//
//         $namedParameter = array();
//         $namedParameter[':taste_id'] = $_POST['taste_id'];
//         $namedParameter[':primary_color'] = $_POST['primary_color'];
//         $namedParameter[':secondary_color'] = $_POST['secondary_color'];
//         $namedParameter[':red_fruits_level'] = $_POST['red_fruits_level'];
//
//         $statement = $conn->prepare($sql); // prevents sql injection
//         $statement->execute($namedParameter);
//         $statement
//         /*
//         $namedParameter = array();
//         $namedParameter[':taste_id'] = $_POST['taste_id'];
//         $namedParameter[':primary_color'] = $_POST['primary_color'];
//         $namedParameter[':secondary_color'] = $_POST['secondary_color'];
//         $namedParameter[':red_fruits_level'] = $_POST['red_fruits_level'];
//         $namedParameter[':red_cherry'] = $_POST['red_cherry'];
//         $namedParameter[':pomegranate'] = $_POST['pomegranate'];
//         $namedParameter[':cranberry'] = $_POST['cranberry'];
//         $namedParameter[':raspberry'] = $_POST['raspberry'];
//         $namedParameter[':red_currant'] = $_POST['red_currant'];
//         $namedParameter[':red_fruit_other'] = $_POST['red_fruit_other'];
//         $namedParameter[':black_fruit_level'] = $_POST['black_fruit_level'];
//         $namedParameter[':black_berry'] = $_POST['black_berry'];
//         $namedParameter[':black_currant'] = $_POST['black_currant'];
//         $namedParameter[':raisin'] = $_POST['raisin'];
//         $namedParameter[':date'] = $_POST['date'];
//         $namedParameter[':fig'] = $_POST['fig'];
//         $namedParameter[':black_fruit_other'] = $_POST['black_fruit_other'];
//         $namedParameter[':blue_fruit_level'] = $_POST['blue_fruit_level'];
//         $namedParameter[':blueberry'] = $_POST['blueberry'];
//         $namedParameter[':dried_blueberry'] = $_POST['dried_blueberry'];
//         $namedParameter[':plum'] = $_POST['plum'];
//         $namedParameter[':plum_skin'] = $_POST['plum_skin'];
//         $namedParameter[':blue_fruit_other'] = $_POST['blue_fruit_other'];
//         $namedParameter[':fruit_type'] = $_POST['fruit_type'];
//         $namedParameter[':flowers_level'] = $_POST['flowers_level'];
//         $namedParameter[':rose'] = $_POST['rose'];
//         $namedParameter[':violet'] = $_POST['violet'];
//         $namedParameter[':lavender'] = $_POST['lavender'];
//         $namedParameter[':dried_flowers'] = $_POST['dried_flowers'];
//         $namedParameter[':potpourri'] = $_POST['potpourri'];
//         $namedParameter[':flowers_other'] = $_POST['flowers_other'];
//         $namedParameter[':herbs_level'] = $_POST['herbs_level'];
//         $namedParameter[':fresh_herbs'] = $_POST['fresh_herbs'];
//         $namedParameter[':dried_herbs'] = $_POST['dried_herbs'];
//         $namedParameter[':tomatoe_leaf'] = $_POST['tomatoe_leaf'];
//         $namedParameter[':basil'] = $_POST['basil'];
//         $namedParameter[':oregeno'] = $_POST['oregeno'];
//         $namedParameter[':fennel'] = $_POST['fennel'];
//         $namedParameter[':herbs_other'] = $_POST['herbs_other'];
//         $namedParameter[':vegetal_level'] = $_POST['vegetal_level'];
//         $namedParameter[':green_bell_pepper_capsicum'] = $_POST['green_bell_pepper_capsicum'];
//         $namedParameter[':vegetal_fresh_herbs'] = $_POST['vegetal_fresh_herbs'];
//         $namedParameter[':vegetal_dried_herbs'] = $_POST['vegetal_dried_herbs'];
//         $namedParameter[':stem_whole_cluster'] = $_POST['stem_whole_cluster'];
//         $namedParameter[':vegetal_other'] = $_POST['vegetal_other'];
//         $namedParameter[':mint_eucalyptus_level'] = $_POST['mint_eucalyptus_level'];
//         $namedParameter[':mint'] = $_POST['mint'];
//         $namedParameter[':eucalyptus'] = $_POST['eucalyptus'];
//         $namedParameter[':menthol'] = $_POST['menthol'];
//         $namedParameter[':mint_eucalyptus_other'] = $_POST['mint_eucalyptus_other'];
//         $namedParameter[':pepper_spice_level'] = $_POST['pepper_spice_level'];
//         $namedParameter[':black_peppercorn'] = $_POST['black_peppercorn'];
//         $namedParameter[':green_peppercorn'] = $_POST['green_peppercorn'];
//         $namedParameter[':cinnamon'] = $_POST['cinnamon'];
//         $namedParameter[':baking_spice'] = $_POST['baking_spice'];
//         $namedParameter[':hard_spice'] = $_POST['hard_spice'];
//         $namedParameter[':anise_licorice'] = $_POST['anise_licorice'];
//         $namedParameter[':pepper_spice_other'] = $_POST['pepper_spice_other'];
//         $namedParameter[':cocoa_coffee_level'] = $_POST['cocoa_coffee_level'];
//         $namedParameter[':dark_chocolate'] = $_POST['dark_chocolate'];
//         $namedParameter[':cocoa_powder'] = $_POST[' cocoa_powder'];
//         $namedParameter[':mocha'] = $_POST['mocha'];
//         $namedParameter[':espresso'] = $_POST['espresso'];
//         $namedParameter[':coffee_grounds'] = $_POST['coffee_grounds'];
//         $namedParameter[':cocoa_coffee_other'] = $_POST['cocoa_coffee_other'];
//         $namedParameter[':meat_leather_level'] = $_POST['meat_leather_level'];
//         $namedParameter[':meat'] = $_POST['meat'];
//         $namedParameter[':grilled_meat'] = $_POST['grilled_meat'];
//         $namedParameter[':beef_jerkey'] = $_POST['beef_jerkey'];
//         $namedParameter[':wet_leather'] = $_POST['wet_leather'];
//         $namedParameter[':dried_leather'] = $_POST['dried_leather'];
//         $namedParameter[':meat_leather_other'] = $_POST['meat_leather_other'];
//         $namedParameter[':tobacco_tar_level'] = $_POST['tobacco_tar_level'];
//         $namedParameter[':wet_tobacco'] = $_POST['wet_tobacco'];
//         $namedParameter[':dried_tobacco'] = $_POST['dried_tobacco'];
//         $namedParameter[':tar'] = $_POST['tar'];
//         $namedParameter[':ashtray'] = $_POST['ashtray'];
//         $namedParameter[':tobacco_tar_other'] = $_POST['tobacco_tar_other'];
//         $namedParameter[':earth_leaves_mushrooms_level'] = $_POST['earth_leaves_mushrooms_level'];
//         $namedParameter[':forest_floor'] = $_POST['forest_floor'];
//         $namedParameter[':compost'] = $_POST['compost'];
//         $namedParameter[':mushrooms'] = $_POST['mushrooms'];
//         $namedParameter[':potting_soil'] = $_POST['potting_soil'];
//         $namedParameter[':barnyard'] = $_POST['barnyard'];
//         $namedParameter[':wet_leaves'] = $_POST['wet_leaves'];
//         $namedParameter[':dried_leaves'] = $_POST['dried_leaves'];
//         $namedParameter[':earth_leaves_mushrooms_other'] = $_POST['earth_leaves_mushrooms_other'];
//         $namedParameter[':mineral_stone_sulfur_level'] = $_POST['mineral_stone_sulfur_level'];
//         $namedParameter[':sulfur'] = $_POST['sulfur'];
//         $namedParameter[':slate_petrol'] = $_POST['slate_petrol'];
//         $namedParameter[':metallic'] = $_POST['metallic'];
//         $namedParameter[':flit'] = $_POST['flit'];
//         $namedParameter[':dust'] = $_POST['dust'];
//         $namedParameter[':chalk'] = $_POST['chalk'];
//         $namedParameter[':limestone'] = $_POST['limestone'];
//         $namedParameter[':volcanic'] = $_POST['volcanic'];
//         $namedParameter[':smokey'] = $_POST['smokey'];
//         $namedParameter[':pencil_lead'] = $_POST['pencil_lead'];
//         $namedParameter[':mineral_stone_sulfur_other'] = $_POST['mineral_stone_sulfur_other'];
//         $namedParameter[':oak_vanilla_smoke_coconut_level'] = $_POST['oak_vanilla_smoke_coconut_level'];
//         $namedParameter[':coconut'] = $_POST['coconut'];
//         $namedParameter[':light_toast'] = $_POST['light_toast'];
//         $namedParameter[':heavy_toast'] = $_POST['heavy_toast'];
//         $namedParameter[':sawdust'] = $_POST['sawdust'];
//         $namedParameter[':sandalwood'] = $_POST['sandalwood'];
//         $namedParameter[':pencil_shavings'] = $_POST['pencil_shavings'];
//         $namedParameter[':oak_vanilla_smoke_coconut_other'] = $_POST['oak_vanilla_smoke_coconut_other'];
//         $namedParameter[':sweetness'] = $_POST['sweetness'];
//         $namedParameter[':alcohol'] = $_POST['alcohol'];
//         $namedParameter[':tannin'] = $_POST['tannin'];
//         $namedParameter[':bitter'] = $_POST['bitter'];
//         $namedParameter[':balanced'] = $_POST['balanced'];
//         $namedParameter[':length'] = $_POST['length'];
//         $namedParameter[':complexity'] = $_POST['complexity'];
//         $namedParameter[':quality_for_price'] = $_POST['quality_for_price'];
//         $namedParameter[':quality_for_price_rate'] = $_POST['quality_for_price_rate'];
//         $statement = $conn->prepare($sql); // prevents sql injection
//         //$statement->execute($namedParameter);
//         $statement
//         echo json_encode(statementa);
//         }
//
//    /*
//
//     ---- Anita Fixed ---
//
//     $sql = "INSERT INTO red_taste_assessment
//            VALUES :taste_id, :primary_color, :secondary_color, :apple_pear_level,
//                :green_apple, :yellow_apple, :red_apple, :baked_apple,
//                :apple_pear_other, :citrus_level, :lemon, :myer_lemon,
//                :lime, :orange, :dried_orange_peel, :grapefruit,
//                :cirtus_other, :stone_level, :white_peach, :yellow_peach,
//                :apricot, :apricot_kernal, :nectarine, :stone_other,
//                :tropcial_melon_leve, :passion_fruit, :pineapple,
//                :kiwi, :lychee, :mango :banana, :tropical_melon_other,
//                :fruit_type, :flower_level, :white_flowers, :yellow_flowers,
//             :dried_flowers, :honeysuckle, :orange_blossom, :flower_other,
//             :herb_level, :dried_herbs, :fresh_herbs, :herbs_other,
//            :vegetal_level, :radish, :jalapeno, :green_bell_pepper,
//            :vegetal_cut_grass, :vegetal_other, :oxidative_leve, :baked_fruit,
//            :brown_fruit, :leather, :ashtray, :oxidative_other,
//            :yeast_bread_dough_level, :brioche, :almond, :fresh_dough,
//            :hazelnut, :yeast, :yeast_bread_dough_other, :ml_butter_cream_level,
//            :earth_leaves_mushrooms_level, :straw_hay,
//            :earth_leaves_mushrooms_cut_grass,:earth_leaves_mushrooms_other
//            :mineral_stone_sulfur_level, :sulfur, :state_petrol, :metallic,
//            :flit, :dust, :chalk, :limestone, :volcanic,  :smokey,
//            :mineral_stone_sulfur_other, :oak_vanilla_toast_level, :vanilla, :maple,
//            :light_toast, :heavy_toast, :sawdust, :oak_vanilla_toast_other, :sweetness, :acid, :alcohol, :bitter, :balanced, :length, :complexity,
//            :quality_for_price, :quality_for_price_rate";
//      $namedParameter[':taste_id'] = $_POST['taste_id'];
//     $namedParameter[':primary_color'] = $_POST['primary_color'];
//     $namedParameter[':secondary_color'] = $_POST['secondary_color'];
//
//
//     $namedParameter[':apple_pear_level'] = $_POST['apple_pear_level'];
//     $namedParameter[':green_apple'] = $_POST['green_apple'];
//     $namedParameter[':yellow_apple'] = $_POST['yellow_apple'];
//     $namedParameter[':red_apple'] = $_POST['red_apple'];
//     $namedParameter[':baked_apple'] = $_POST['baked_apple'];
//     $namedParameter[':apple_pear_other'] = $_POST['apple_pear_other'];
//
//     $namedParameter[':citrus_level'] = $_POST['citrus_level'];
//     $namedParameter[':lemon'] = $_POST['lemon'];
//     $namedParameter[':myer_lemon'] = $_POST['myer_lemon'];
//     $namedParameter[':lime'] = $_POST['lime'];
//     $namedParameter[':orange'] = $_POST['orange'];
//     $namedParameter[':dried_orange_peel'] = $_POST['dried_orange_peel'];
//     $namedParameter[':grapefruit'] = $_POST['grapefruit'];
//     $namedParameter[':cirtus_other'] = $_POST['cirtus_other'];
//     $namedParameter[':stone_level'] = $_POST['stone_level'];
//     $namedParameter[':white_peach'] = $_POST['white_peach'];
//     $namedParameter[':yellow_peach'] = $_POST['yellow_peach'];
//     $namedParameter[':apricot'] = $_POST['apricot'];
//     $namedParameter[':apricot_kernal'] = $_POST['apricot_kernal'];
//     $namedParameter[':nectarine'] = $_POST['nectarine'];
//     $namedParameter[':stone_other'] = $_POST['stone_other'];
//     $namedParameter[':tropcial_melon_leve'] = $_POST['tropcial_melon_leve'];
//     $namedParameter[':passion_fruit'] = $_POST['passion_fruit'];
//     $namedParameter[':pineapple'] = $_POST['pineapple'];
//     $namedParameter[':kiwi'] = $_POST['lychee'];
//     $namedParameter[':lychee'] = $_POST['lychee'];
//     $namedParameter[':mango'] = $_POST['mango'];
//     $namedParameter[':banana'] = $_POST['banana'];
//     $namedParameter[':tropical_melon_other'] = $_POST['tropical_melon_other'];
//     $namedParameter[':fruit_type'] = $_POST['fruit_type'];
//     $namedParameter[':flower_level'] = $_POST['flower_level'];
//     $namedParameter[':white_flowers'] = $_POST['white_flowers'];
//     $namedParameter[':yellow_flowers'] = $_POST['yellow_flowers'];
//     $namedParameter[':dried_flowers'] = $_POST['dried_flowers'];
//     $namedParameter[':honeysuckle'] = $_POST['honeysuckle'];
//     $namedParameter[':orange_blossom'] = $_POST['orange_blossom'];
//     $namedParameter[':flower_other'] = $_POST['flower_other'];
//     $namedParameter[':herb_level'] = $_POST['herb_level'];
//     $namedParameter[':dried_herbs'] = $_POST['dried_herbs'];
//     $namedParameter[':fresh_herbs'] = $_POST['fresh_herbs'];
//     $namedParameter[':herbs_other'] = $_POST['herbs_other'];
//     $namedParameter[':vegetal_level'] = $_POST['vegetal_level'];
//     $namedParameter[':radish'] = $_POST['radish'];
//     $namedParameter[':jalapeno'] = $_POST['jalapeno'];
//     $namedParameter[':green_bell_pepper'] = $_POST['green_bell_pepper'];
//     $namedParameter[':vegetal_cut_grass'] = $_POST['vegetal_cut_grass'];
//     $namedParameter[':vegetal_other'] = $_POST['vegetal_other'];
//     $namedParameter[':oxidative_leve'] = $_POST['oxidative_leve'];
//     $namedParameter[':baked_fruit'] = $_POST['baked_fruit'];
//     $namedParameter[':brown_fruit'] = $_POST['brown_fruit'];
//     $namedParameter[':leather'] = $_POST['leather'];
//     $namedParameter[':ashtray'] = $_POST['ashtray'];
//     $namedParameter[':oxidative_other'] = $_POST['oxidative_other'];
//     $namedParameter[':yeast_bread_dough_level'] = $_POST['yeast_bread_dough_level'];
//     $namedParameter[':brioche'] = $_POST['brioche'];
//     $namedParameter[':almond'] = $_POST['almond'];
//     $namedParameter[':fresh_dough'] = $_POST['fresh_dough'];
//     $namedParameter[':hazelnut'] = $_POST['hazelnut'];
//     $namedParameter[':yeast'] = $_POST['yeast'];
//     $namedParameter[':yeast_bread_dough_other'] = $_POST['yeast_bread_dough_other'];
//     $namedParameter[':ml_butter_cream_level'] = $_POST['ml_butter_cream_level'];
//     $namedParameter[':earth_leaves_mushrooms_level'] = $_POST['earth_leaves_mushrooms_level'];
//     $namedParameter[':straw_hay'] = $_POST['straw_hay'];
//     $namedParameter[':earth_leaves_mushrooms_cut_grass'] = $_POST['earth_leaves_mushrooms_cut_grass'];
//     $namedParameter[':earth_leaves_mushrooms_other'] = $_POST['earth_leaves_mushrooms_other'];
//     $namedParameter[':mineral_stone_sulfur_level'] = $_POST['mineral_stone_sulfur_level'];
//     $namedParameter[':sulfur'] = $_POST['sulfur'];
//     $namedParameter[':state_petrol'] = $_POST['state_petrol'];
//     $namedParameter[':metallic'] = $_POST['metallic'];
//     $namedParameter[':flit'] = $_POST['flit'];
//     $namedParameter[':dust'] = $_POST['dust'];
//     $namedParameter[':chalk'] = $_POST['chalk'];
//     $namedParameter[':limestone'] = $_POST['limestone'];
//     $namedParameter[':volcanic'] = $_POST['volcanic'];
//     $namedParameter[':smokey'] = $_POST['smokey'];
//     $namedParameter[':mineral_stone_sulfur_other'] = $_POST['mineral_stone_sulfur_other'];
//     $namedParameter[':oak_vanilla_toast_level'] = $_POST['oak_vanilla_toast_level'];
//     $namedParameter[':vanilla'] = $_POST['vanilla'];
//     $namedParameter[':maple'] = $_POST['maple'];
//     $namedParameter[':light_toast'] = $_POST['light_toast'];
//     $namedParameter[':heavy_toast'] = $_POST['heavy_toast'];
//     $namedParameter[':sawdust'] = $_POST['sawdust'];
//     $namedParameter[':oak_vanilla_toast_other'] = $_POST['oak_vanilla_toast_other'];
//     $namedParameter[':sweetness'] = $_POST['sweetness'];
//     $namedParameter[':acid'] = $_POST['acid'];// May not be on form
//     $namedParameter[':alcohol'] = $_POST['alcohol'];
//     $namedParameter[':bitter'] = $_POST['bitter'];
//     $namedParameter[':balanced'] = $_POST['balanced'];
//     $namedParameter[':length'] = $_POST['length'];
//     $namedParameter[':complexity'] = $_POST['complexity'];
//     $namedParameter[':quality_for_price'] = $_POST['quality_for_price'];
//     $namedParameter[':quality_for_price_rate'] = $_POST['quality_for_price_rate'];
//
//
//     ------
//
//      /*if(isset($_POST['whiteAssessForm']){
//         $sql = "INSERT INTO white_taste_assessment
//               VALUES (:taste_id, :primary_color, :secondary_color,:apple_pear_level,
//                       :green_apple, :yellow_apple, :red_apple, :baked_apple, :apple_pear_other,
//                       :citrus_level, :lemon, $myer_lemon, :lime, :orange, :dried_orange_peel,
//                       :grapefruit, :cirtus_other, :stone_level, :white_peach, :yellow_peach,
//                       :apricot, :apricot_kernal, :nectarine, :stone_other, :tropcial_melon_level,
//                       :passion_fruit, :pineapple, :kiwi, :lychee, :mango, :banana, :tropical_melon_other,
//                       :fruit_type, :flower_level, :white_flowers, :yellow_flowers, :dried_flowers, :honeysuckle,
//                       :orange_blossom, :flower_other, :herb_level, :dried_herbs, :fresh_herbs, :herbs_other,
//                       :vegetal_level, :radish,$jalapeno, :green_bell_pepper, :vegetal_cut_grass, :vegetal_other,
//                       :oxidative_level, :baked_fruit, :brown_fruit, :leather, :ashtray, :oxidative_other,
//                       :yeast_bread_dough_level, :brioche, :almond, :fresh_dough, :hazelnut,$yeast,
//                       :yeast_bread_dough_other,:ml_butter_cream_level,:earth_leaves_mushrooms_level,
//                       :straw_hay, :earth_leaves_mushrooms_cut_grass, :earth_leaves_mushrooms_other,
//                       :mineral_stone_sulfur_level, :sulfur, :state_petrol, :metallic, :flit, :dust, $chalk,
//                       :limestone, $volcanic, :smokey, :mineral_stone_sulfur_other, :oak_vanilla_toast_level,
//                       :vanilla, :maple, :light_toast, :heavy_toast, :sawdust, :oak_vanilla_toast_other,
//                       :sweetness, :alcohol, :bitter, :balanced, :length, :complexity, :quality_for_price,
//                       :quality_for_price_rate, :acid)";
//
//     $namedParameter = array();
//     $namedParameter[':taste_id'] = $_POST[':taste_id'];
//     $namedParameter[' :primary_color'] = $_POST[' :primary_color'];
//     $namedParameter[' :secondary_color'] = $_POST[' :secondary_color'];
//     $namedParameter[' :apple_pear_level'] = $_POST[' :apple_pear_level'];
//     $namedParameter[' :green_apple'] = $_POST[' :green_apple'];
//     $namedParameter[' :yellow_apple'] = $_POST[' :yellow_apple'];
//     $namedParameter[' :red_apple'] = $_POST[' :red_apple'];
//     $namedParameter[' :baked_apple'] = $_POST[' :baked_apple'];
//     $namedParameter[' :apple_pear_other'] = $_POST[' :apple_pear_other'];
//     $namedParameter[' :citrus_level'] = $_POST[' :citrus_level'];
//     $namedParameter[' :lemon'] = $_POST[' :lemon'];
//     $namedParameter[' :myer_lemon'] = $_POST[' :myer_lemon'];
//     $namedParameter[' :lime'] = $_POST[' :lime'];
//     $namedParameter[' :orange'] = $_POST[' :orange'];
//     $namedParameter[' :dried_orange_peel'] = $_POST[' :dried_orange_peel'];
//     $namedParameter[' :grapefruit'] = $_POST[' :grapefruit'];
//     $namedParameter[' :cirtus_other'] = $_POST[' :cirtus_other'];
//     $namedParameter[' :stone_level'] = $_POST[' :stone_level'];
//     $namedParameter[' :white_peach'] = $_POST[' :white_peach'];
//     $namedParameter[' :yellow_peach'] = $_POST[' :yellow_peach'];
//     $namedParameter[' :apricot'] = $_POST[' :apricot'];
//     $namedParameter[' :apricot_kernal'] = $_POST[' :apricot_kernal'];
//     $namedParameter[' :nectarine'] = $_POST[' :nectarine'];
//     $namedParameter[' :stone_other'] = $_POST[' :stone_other'];
//     $namedParameter[' :tropcial_melon_level'] = $_POST[' :tropcial_melon_level'];
//     $namedParameter[' :passion_fruit'] = $_POST[' :passion_fruit'];
//     $namedParameter[' :pineapple'] = $_POST[' :pineapple'];
//     $namedParameter[' :kiwi'] = $_POST[' :kiwi'];
//     $namedParameter[' :lychee'] = $_POST[' :lychee'];
//     $namedParameter[' :mango'] = $_POST[' :mango'];
//     $namedParameter[' :banana'] = $_POST[' :banana'];
//     $namedParameter[' :tropical_melon_other'] = $_POST[' :tropical_melon_other'];
//     $namedParameter[' :fruit_type'] = $_POST[' :fruit_type'];
//     $namedParameter[':flower_level'] = $_POST[':flower_level'];
//     $namedParameter[' :white_flowers'] = $_POST[' :white_flowers'];
//     $namedParameter[' :yellow_flowers'] = $_POST[' :yellow_flowers'];
//     $namedParameter[' :dried_flowers'] = $_POST[' :dried_flowers'];
//     $namedParameter[' :honeysuckle'] = $_POST[' :honeysuckle'];
//     $namedParameter[' :orange_blossom'] = $_POST[' :orange_blossom'];
//     $namedParameter[' :flower_other'] = $_POST[' :flower_other'];
//     $namedParameter[' :herb_level'] = $_POST[' :herb_level'];
//     $namedParameter[' :dried_herbs'] = $_POST[' :dried_herbs'];
//     $namedParameter[' :fresh_herbs'] = $_POST[' :fresh_herbs'];
//     $namedParameter[' :herbs_other'] = $_POST[' :herbs_other'];
//     $namedParameter[' :vegetal_level'] = $_POST[' :vegetal_level'];
//     $namedParameter[' :radish'] = $_POST[' :radish'];
//     $namedParameter[':jalapeno'] = $_POST[':jalapeno'];
//     $namedParameter[' :green_bell_pepper'] = $_POST[' :green_bell_pepper'];
//     $namedParameter[' :vegetal_cut_grass'] = $_POST[' :vegetal_cut_grass'];
//     $namedParameter[' :vegetal_other'] = $_POST[' :vegetal_other'];
//     $namedParameter[' :oxidative_level'] = $_POST[' :oxidative_level'];
//     $namedParameter[' :baked_fruit'] = $_POST[' :baked_fruit'];
//     $namedParameter[' :brown_fruit'] = $_POST[' :brown_fruit'];
//     $namedParameter[' :leather'] = $_POST[' :leather'];
//     $namedParameter[' :ashtray'] = $_POST[' :ashtray'];
//     $namedParameter[' :oxidative_other'] = $_POST[' :oxidative_other'];
//     $namedParameter[' :yeast_bread_dough_level'] = $_POST[' :yeast_bread_dough_level'];
//     $namedParameter[' :brioche'] = $_POST[' :brioche'];
//     $namedParameter[' :almond'] = $_POST[' :almond'];
//     $namedParameter[' :fresh_dough'] = $_POST[' :fresh_dough'];
//     $namedParameter[' :hazelnut'] = $_POST[' :hazelnut'];
//     $namedParameter[':yeast'] = $_POST[':yeast'];
//     $namedParameter[':yeast_bread_dough_other'] = $_POST[':yeast_bread_dough_other'];
//     $namedParameter[':ml_butter_cream_level'] = $_POST[':ml_butter_cream_level'];
//     $namedParameter[':earth_leaves_mushrooms_level'] = $_POST[':earth_leaves_mushrooms_level'];
//     $namedParameter[' :straw_hay'] = $_POST[' :straw_hay'];
//     $namedParameter[' :earth_leaves_mushrooms_cut_grass'] = $_POST[' :earth_leaves_mushrooms_cut_grass'];
//     $namedParameter[' :earth_leaves_mushrooms_other'] = $_POST[' :earth_leaves_mushrooms_other'];
//     $namedParameter[':mineral_stone_sulfur_level'] = $_POST[':mineral_stone_sulfur_level'];
//     $namedParameter[' :sulfur'] = $_POST[' :sulfur'];
//     $namedParameter[' :state_petrol'] = $_POST[' :state_petrol'];
//     $namedParameter[' :metallic'] = $_POST[' :metallic'];
//     $namedParameter[' :flit'] = $_POST[' :flit'];
//     $namedParameter[' :dust'] = $_POST[' :dust'];
//     $namedParameter[' :chalk'] = $_POST[' :chalk'];
//     $namedParameter[' :limestone'] = $_POST[' :limestone'];
//     $namedParameter[' :volcanic'] = $_POST[' :volcanic'];
//     $namedParameter[' :smokey'] = $_POST[' :smokey'];
//     $namedParameter[' :mineral_stone_sulfur_other'] = $_POST[' :mineral_stone_sulfur_other'];
//     $namedParameter[' :oak_vanilla_toast_level'] = $_POST[' :oak_vanilla_toast_level'];
//     $namedParameter[' :vanilla'] = $_POST[' :vanilla'];
//     $namedParameter[' :maple'] = $_POST[' :maple'];
//     $namedParameter[' :light_toast'] = $_POST[' :light_toast'];
//     $namedParameter[' :heavy_toast'] = $_POST[' :heavy_toast'];
//     $namedParameter[' :sawdust'] = $_POST[' :sawdust'];
//     $namedParameter[' :oak_vanilla_toast_other'] = $_POST[' :oak_vanilla_toast_other'];
//     $namedParameter[' :sweetness'] = $_POST[' :sweetness'];
//     $namedParameter[' :alcohol'] = $_POST[' :alcohol'];
//     $namedParameter[' :bitter'] = $_POST[' :bitter'];
//     $namedParameter[' :balanced'] = $_POST[' :balanced'];
//     $namedParameter[' :length'] = $_POST[' :length'];
//     $namedParameter[' :complexity'] = $_POST[' :complexity'];
//     $namedParameter[' :quality_for_price'] = $_POST[' :quality_for_price'];
//     $namedParameter[' :quality_for_price_rate'] = $_POST[' :quality_for_price_rate'];
//     $namedParameter[':acid'] = $_POST[':acid'];
//
//   	$statement = $conn->prepare($sql); // prevents sql injection
//   	$statement->execute($namedParameter);
//
//     }
//
// }*/
// //echo json_encode($_POST);
?>
