       <form id="red-wine-assessment" method="post" action="api/assess.php">
                 <div class="assess-section" id="asses-overview">
                    <h3> Primary Color </h3><br>
                    <input type="radio" name="primary_color" value="Orange">Orange 
                    <input type="radio" name="primary_color" value="Garnet">Garnet
                    <input type="radio" name="primary_color" value="Ruby">Ruby
                    <input type="radio" name="primary_color" value="Purple">Purple  

                    <h3> Secondary Color </h3><br>
                    <input type="radio" name="secondary_color" value="Brown">Brown
                    <input type="radio" name="secondary_color" value="Black/Blue">Black/blue

                    <h3> Red Fruit </h3><br>
                    <input type="radio" name="red_fruits_level" value="0">None
                    <input type="radio" name="red_fruits_level" value="1">Low
                    <input type="radio" name="red_fruits_level" value="2">Medium
                    <input type="radio" name="red_fruits_level" value="3">High

                    <!--

                     <wc-multi-select-input makevisible="[[redBool]]"
                                            label="Choose all that apply"
                                            from="api/red-aroma-values.php"
                                            link="red_fruit"
                                            style="width: 100%">
                     </wc-multi-select-input>

                     <wc-button-select-input name="black_fruit" selected="{{blackBool}}">
                         <paper-button raised noink>None</paper-button>
                         <paper-button raised noink>Low</paper-button>
                         <paper-button raised noink>Medium</paper-button>
                         <paper-button raised noink>High</paper-button>
                     </wc-button-select-input>

                     <wc-multi-select-input makevisible="[[blackBool]]"
                                            label="Choose all that apply"
                                            from="api/red-aroma-values.php"
                                            link="black_fruit"
                                            style="width: 100%">
                     </wc-multi-select-input>

                     <wc-button-select-input name="blue_fruit" selected="{{blueBool}}">
                         <paper-button raised noink>None</paper-button>
                         <paper-button raised noink>Low</paper-button>
                         <paper-button raised noink>Medium</paper-button>
                         <paper-button raised noink>High</paper-button>
                     </wc-button-select-input>

                     <wc-multi-select-input makevisible="[[blueBool]]"
                                            label="Choose all that apply"
                                            from="api/red-aroma-values.php"
                                            link="blue_fruit"
                                            style="width: 100%">
                     </wc-multi-select-input>

                     <wc-button-select-input name="fruit_type" selected="{{typeBool}}">
                         <paper-button raised noink>None</paper-button>
                         <paper-button raised noink>Low</paper-button>
                         <paper-button raised noink>Medium</paper-button>
                         <paper-button raised noink>High</paper-button>
                     </wc-button-select-input>

                     <wc-multi-select-input makevisible="[[typeBool]]"
                                            label="Choose all that apply"
                                            from="api/red-aroma-values.php"
                                            link="fruit_type"
                                            style="width: 100%">
                     </wc-multi-select-input>

                     <wc-button-select-input name="flowers" selected="{{flowersBool}}">
                         <paper-button raised noink>None</paper-button>
                         <paper-button raised noink>Low</paper-button>
                         <paper-button raised noink>Medium</paper-button>
                         <paper-button raised noink>High</paper-button>
                     </wc-button-select-input>

                     <wc-multi-select-input makevisible="[[flowersBool]]"
                                            label="Choose all that apply"
                                            from="api/red-aroma-values.php"
                                            link="flowers"
                                            style="width: 100%">
                     </wc-multi-select-input>

                     <wc-button-select-input name="herbs" selected="{{herbsBool}}">
                         <paper-button raised noink>None</paper-button>
                         <paper-button raised noink>Low</paper-button>
                         <paper-button raised noink>Medium</paper-button>
                         <paper-button raised noink>High</paper-button>
                     </wc-button-select-input>

                     <wc-multi-select-input makevisible="[[herbsBool]]"
                                            label="Choose all that apply"
                                            from="api/red-aroma-values.php"
                                            link="herbs"
                                            style="width: 100%">
                     </wc-multi-select-input>

                     <wc-button-select-input name="vegetal" selected="{{vegetalBool}}">
                         <paper-button raised noink>None</paper-button>
                         <paper-button raised noink>Low</paper-button>
                         <paper-button raised noink>Medium</paper-button>
                         <paper-button raised noink>High</paper-button>
                     </wc-button-select-input>

                     <wc-multi-select-input makevisible="[[vegetalBool]]"
                                            label="Choose all that apply"
                                            from="api/red-aroma-values.php"
                                            link="vegetal"
                                            style="width: 100%">
                     </wc-multi-select-input>


                     <wc-button-select-input name="mint_eucalyptus" selected="{{mintBool}}">
                         <paper-button raised noink>None</paper-button>
                         <paper-button raised noink>Low</paper-button>
                         <paper-button raised noink>Medium</paper-button>
                         <paper-button raised noink>High</paper-button>
                     </wc-button-select-input>

                     <wc-multi-select-input makevisible="[[mintBool]]"
                                            label="Choose all that apply"
                                            from="api/red-aroma-values.php"
                                            link="mint_eucalyptus"
                                            style="width: 100%">
                     </wc-multi-select-input>

                     <wc-button-select-input name="pepper_spice" selected="{{pepperBool}}">
                         <paper-button raised noink>None</paper-button>
                         <paper-button raised noink>Low</paper-button>
                         <paper-button raised noink>Medium</paper-button>
                         <paper-button raised noink>High</paper-button>
                     </wc-button-select-input>

                     <wc-multi-select-input makevisible="[[pepperBool]]"
                                            label="Choose all that apply"
                                            from="api/red-aroma-values.php"
                                            link="pepper_spice"
                                            style="width: 100%">
                     </wc-multi-select-input>

                     <wc-button-select-input name="cocoa_coffee" selected="{{cocoaBool}}">
                         <paper-button raised noink>None</paper-button>
                         <paper-button raised noink>Low</paper-button>
                         <paper-button raised noink>Medium</paper-button>
                         <paper-button raised noink>High</paper-button>
                     </wc-button-select-input>

                     <wc-multi-select-input makevisible="[[cocoaBool]]"
                                            label="Choose all that apply"
                                            from="api/red-aroma-values.php"
                                            link="cocoa_coffee"
                                            style="width: 100%">
                     </wc-multi-select-input>

                     <wc-button-select-input name="meat_leather" selected="{{meatBool}}">
                         <paper-button raised noink>None</paper-button>
                         <paper-button raised noink>Low</paper-button>
                         <paper-button raised noink>Medium</paper-button>
                         <paper-button raised noink>High</paper-button>
                     </wc-button-select-input>

                     <wc-multi-select-input makevisible="[[meatBool]]"
                                            label="Choose all that apply"
                                            from="api/red-aroma-values.php"
                                            link="meat_leather"
                                            style="width: 100%">
                     </wc-multi-select-input>

                     <wc-button-select-input name="tobacco_tar"selected="{{tabaccoBool}}">
                         <paper-button raised noink>None</paper-button>
                         <paper-button raised noink>Low</paper-button>
                         <paper-button raised noink>Medium</paper-button>
                         <paper-button raised noink>High</paper-button>
                     </wc-button-select-input>

                     <wc-multi-select-input makevisible="[[tabaccoBool]]"
                                            label="Choose all that apply"
                                            from="api/red-aroma-values.php"
                                            link="tobacco_tar"
                                            style="width: 100%">
                     </wc-multi-select-input>

                     <wc-button-select-input name="earth_leaves_mushrooms" selected="{{earthBool}}">
                         <paper-button raised noink>None</paper-button>
                         <paper-button raised noink>Low</paper-button>
                         <paper-button raised noink>Medium</paper-button>
                         <paper-button raised noink>High</paper-button>
                     </wc-button-select-input>

                     <wc-multi-select-input makevisible="[[earthBool]]"
                                            label="Choose all that apply"
                                            from="api/red-aroma-values.php"
                                            link="earth_leaves_mushrooms"
                                            style="width: 100%">
                     </wc-multi-select-input>

                     <wc-button-select-input name="mineral_stone_sulfur" selected="{{mineralBool}}">
                         <paper-button raised noink>None</paper-button>
                         <paper-button raised noink>Low</paper-button>
                         <paper-button raised noink>Medium</paper-button>
                         <paper-button raised noink>High</paper-button>
                     </wc-button-select-input>

                     <wc-multi-select-input makevisible="[[mineralBool]]"
                                            label="Choose all that apply"
                                            from="api/red-aroma-values.php"
                                            link="mineral_stone_sulfur"
                                            style="width: 100%">
                     </wc-multi-select-input>

                     <wc-button-select-input name="oak_vanilla_toast_smoke_coconut" selected="{{oakBool}}">
                         <paper-button raised noink>None</paper-button>
                         <paper-button raised noink>Low</paper-button>
                         <paper-button raised noink>Medium</paper-button>
                         <paper-button raised noink>High</paper-button>
                     </wc-button-select-input>

                     <wc-multi-select-input makevisible="[[oakBool]]"
                                            label="Choose all that apply"
                                            from="api/red-aroma-values.php"
                                            link="oak_vanilla_toast_smoke_coconut"
                                            style="width: 100%">
                     </wc-multi-select-input>

                     <wc-button-select-input name="sweetness">
                         <paper-button raised noink>None</paper-button>
                         <paper-button raised noink>Low</paper-button>
                         <paper-button raised noink>Medium</paper-button>
                         <paper-button raised noink>High</paper-button>
                     </wc-button-select-input>

                     <wc-button-select-input name="acid">
                         <paper-button raised noink>None</paper-button>
                         <paper-button raised noink>Low</paper-button>
                         <paper-button raised noink>Medium</paper-button>
                         <paper-button raised noink>High</paper-button>
                     </wc-button-select-input>

                     <wc-button-select-input name="alcohol">
                         <paper-button raised noink>None</paper-button>
                         <paper-button raised noink>Low</paper-button>
                         <paper-button raised noink>Medium</paper-button>
                         <paper-button raised noink>High</paper-button>
                     </wc-button-select-input>

                     <wc-button-select-input name="tannin">
                         <paper-button raised noink>None</paper-button>
                         <paper-button raised noink>Low</paper-button>
                         <paper-button raised noink>Medium</paper-button>
                         <paper-button raised noink>High</paper-button>
                     </wc-button-select-input>

                      <wc-button-select-input name="bitter">
                         <paper-button raised noink>None</paper-button>
                         <paper-button raised noink>Low</paper-button>
                         <paper-button raised noink>Medium</paper-button>
                         <paper-button raised noink>High</paper-button>
                     </wc-button-select-input>

                     <wc-button-select-input name="balanced">
                         <paper-button raised noink>Yes</paper-button>
                         <paper-button raised noink>No</paper-button>

                     </wc-button-select-input>

                     <wc-button-select-input name="length">
                         <paper-button raised noink>Short</paper-button>
                         <paper-button raised noink>Medium</paper-button>
                         <paper-button raised noink>Medium Plus</paper-button>
                         <paper-button raised noink>Long</paper-button>
                     </wc-button-select-input>

                     <wc-button-select-input name="complexity">
                         <paper-button raised noink>Low</paper-button>
                         <paper-button raised noink>Moderate</paper-button>
                         <paper-button raised noink>Medium Plus</paper-button>
                     </wc-button-select-input>

                     <!--<input hidden$="{{true}}" type="text" value="{{user.user_name}}" name="user_name">-
                     <input hidden$="{{true}}" type="text" value="{{params.name}}" name="wine_name">
                     <input hidden$="{{true}}" type="text" value="{{params.producer}}" name="wine_producer">
                     <input hidden$="{{true}}" type="text" value="{{params.vintage}}" name="wine_vintage">
                 </div> -->
                 <button class="btn" name="redAssessReturn" type="submit">Submit</button>
            </form>
       