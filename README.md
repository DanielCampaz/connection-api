else if ($apE === "featured_image") {
    ?>
    
    <div class="postype config dynamic <?php echo $apE ?>">
        <i title="Arrow for <?php echo $apE ?>" class="material-icons arrowX despla <?php echo $apE ?>">keyboard_arrow_right</i>
        <h4><?php echo $apE ?></h4>
        <div class="content postype config arrow_<?php echo $apE ?>" style="display: none">
            <h2><?php echo $apE ?></h2>
            <h3>What key of the json of the response will be in the <?php echo $apE ?></h3>
            <div>
                <div class="multiples_json_properties_configurations_<?php echo $apE ?>" style="margin:5px;">
                <label title="Only properties of type string can be" for="json_configuration_<?php echo $apE ?>_posttype_create_type" style="margin:5px;">
                                Type
                            </label>
                            <input title="Only properties of type string can be" name="json_configuration_<?php echo $apE ?>_posttype_create_type" id="json_configuration_<?php echo $apE ?>_posttype_create_type" value="String" disabled>

                            <label title="If there are levels deep use the ':' like this: 'properties:action:remember'" for="json_configuration_<?php echo $apE ?>_posttype_create_name" style="margin:5px;">
                                Name
                            </label>
                            <input title="If there are levels deep use the ':' like this: 'properties:action:remember'" type="text" name="json_configuration_<?php echo $apE ?>_posttype_create_name" id="json_configuration_<?php echo $apE ?>_posttype_create_name">
                </div>
            </div>
        </div>
    </div>
    
    
    <?php
}