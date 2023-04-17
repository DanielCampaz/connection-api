<?php
require_once dirname(__FILE__, 2) . '\const\const.php';

$postElements = ["comment_status", "post_author", "post_name", "post_title", "post_content", "post_status", "post_type", "post_category"];


?>

<div>
    <div class="connection_api titles">
        <h1 class="connection_api todo title"><?php echo $NAME_APPLICATION_TODO ?></h1>
        <p class="connection_api todo guide"><?php echo $GUIDE_TODO ?></p>
    </div>
    <div class="connection_api others_apis">
        <h1>APIS:</h1>
        <div class="cards">
            <?php
            for ($i = 0; $i < 10; $i++) {
            ?>
                <div class="connection_api card">
                    <div class="header" style="margin: 10px">
                        <h1>Name Api</h1>
                    </div>
                    <div class="body" style="margin: 10px">
                        <h4>Session?: True</h4>
                        <h4>Refresh Token: 10 HRS</h4>
                        <h4>Api Key?: True</h4>
                        <h4>Api Key Value: EacnE3fo35vm1313#cvlk</h4>
                    </div>
                    <div class="footer" style="margin: 10px">
                        <a href="https://localhost/proyectos/estudio/wp-admin">https://localhost/proyectos/estudio/wp-admin</a>
                        <br />
                        <button onclick="settingsEndpoints(65465, 'prueba','https/localhost:5000', true, 10, 'dscampaz3110@gmail.com', 'daniel2008b', 'auth/login', true, '1321casc5efa11e51', 2 )">Edit Info</button>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <div class="endpoints" style="margin: 15px">
        <h3>Endpoints:</h3>
        <div>
            <?php
            for ($i = 1; $i <= 50; $i++) {
            ?>
                <div title="Press to configure this endpoint '<?php echo $i ?>'">
                    <button onclick="btnEndpointsEdit(<?php echo $i ?>)"><?php echo $i ?></button>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <div class="connection_api configurateToDoEndpoints">
        <div class="query">
            <h3>{url}/{endpoint}?{query}</h3>
        </div>
        <div class="action">
            <select name="actionTodoEndpoint" id="actionTodoEndpoint" title="Select To Action">
                <option disabled>Select Action For Endpoint {endpoint}</option>
                <option value="Post Type">Post Type</option>
                <option value="Save Image">Save Images</option>
            </select>
        </div>
        <div class="posttype json" style="display: none;">
            <form action="" method="post">
                <?php

                foreach ($postElements as $apE) {
                    if ($apE === "comment_status") {
                ?>
                        <div class="postype config <?php echo $apE ?>">
                            <h2><?php echo $apE ?></h2>
                            <h3>What key of the json of the response will be in the <?php echo $apE ?></h3>
                            <label class="content-input" for="comment_on" style="margin: 10px">
                                <input type="checkbox" name="comment_on" id="comment_on">Comments On for all post <?php echo $apE ?>
                                <i></i>
                            </label>
                        </div>

                    <?php
                    } else if ($apE === "post_status") {
                    ?>
                        <div class="postype config <?php echo $apE ?>">
                            <i title="Arrow for <?php echo $apE ?>" class="material-icons arrowX despla <?php echo $apE ?>">keyboard_arrow_right</i>
                            <h4><?php echo $apE ?></h4>
                            <div class="content postype config arrow_<?php echo $apE ?>" style="display: none">
                                <h2><?php echo $apE ?></h2>
                                <label class="content-input" for="dynamic_status" style="margin: 10px">
                                    <input type="checkbox" name="dynamic_status" id="dynamic_status">Dynamic Status <?php echo $apE ?>
                                    <i></i>
                                </label>
                                <div class="yes dynamic">
                                    <div class="">
                                        <h3>What key of the json of the response will be in the <?php echo $apE ?></h3>
                                        <p>Note: You can only choose one property</p>
                                        <div>
                                            <div style="margin:5px;">
                                                <label title="Only properties of type string can be" for="json_configuration_<?php echo $apE ?>_posttype_create_type" style="margin:5px;">
                                                    Type
                                                </label>
                                                <input title="Only properties of type string can be" name="json_configuration_<?php echo $apE ?>_posttype_create_type" id="json_configuration_<?php echo $apE ?>_posttype_create_type" value="String" disabled>

                                                <label title="If there are levels deep use the ':' like this: 'properties:action:remenber'" for="json_configuration_<?php echo $apE ?>_posttype_create_name" style="margin:5px;">
                                                    Name
                                                </label>
                                                <input title="If there are levels deep use the ':' like this: 'properties:action:remenber'" type="text" name="json_configuration_<?php echo $apE ?>_posttype_create_name" id="json_configuration_<?php echo $apE ?>_posttype_create_name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="no dynamic">
                                    <label for="no-dynamic-publish">Choose what type of status will be applied to the post, keep in mind that they will be applied to all posts</label>
                                    <select name="no-dynamic-publish" id="no-dynamic-publish">
                                        <option value="publish">Publish</option>
                                        <option value="future">Future</option>
                                        <option value="draft">Draft</option>
                                        <option value="pending">Tending</option>
                                        <option value="private">Private</option>
                                        <option value="trash">Trash</option>
                                        <option value="auto-draft">Auto-draft</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    <?php
                    } else if ($apE === "post_type") {
                    ?>
                        <div class="postype config <?php echo $apE ?>">
                            <i title="Arrow for <?php echo $apE ?>" class="material-icons arrowX despla <?php echo $apE ?>">keyboard_arrow_right</i>
                            <h4><?php echo $apE ?></h4>
                            <div class="content postype config arrow_<?php echo $apE ?>" style="display: none">
                                <h2><?php echo $apE ?></h2>
                                <div class="">
                                    <h3>What key of the json of the response will be in the <?php echo $apE ?></h3>
                                    <p>Note 1: You can only choose one property</p>
                                    <p>Note 2: This property will be added to the post type list for query manipulation</p>
                                    <div>
                                        <div style="margin:5px;">
                                            <label title="Only properties of type string can be" for="json_configuration_<?php echo $apE ?>_posttype_create_type" style="margin:5px;">
                                                Type
                                            </label>
                                            <input title="Only properties of type string can be" name="json_configuration_<?php echo $apE ?>_posttype_create_type" id="json_configuration_<?php echo $apE ?>_posttype_create_type" value="String" disabled>

                                            <label title="If there are levels deep use the ':' like this: 'properties:action:remenber'" for="json_configuration_<?php echo $apE ?>_posttype_create_name" style="margin:5px;">
                                                Name
                                            </label>
                                            <input title="If there are levels deep use the ':' like this: 'properties:action:remenber'" type="text" name="json_configuration_<?php echo $apE ?>_posttype_create_name" id="json_configuration_<?php echo $apE ?>_posttype_create_name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    } else {
                    ?>

                        <div class="postype config dynamic <?php echo $apE ?>">
                            <i title="Arrow for <?php echo $apE ?>" class="material-icons arrowX despla <?php echo $apE ?>">keyboard_arrow_right</i>
                            <h4><?php echo $apE ?></h4>
                            <div class="content postype config arrow_<?php echo $apE ?>" style="display: none">
                                <h2><?php echo $apE ?></h2>
                                <h3>What key of the json of the response will be in the <?php echo $apE ?></h3>
                                <p>Note: the properties that you add will be attached to the post in that same order</p>
                                <label>
                                    How many keys will be used here <input id="input_number_types_<?php echo $apE ?>" type="number" value="0">
                                </label>
                                <div>
                                    <div class="multiples_json_properties_configurations_<?php echo $apE ?>" style="margin:5px;"></div>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }

                ?>
                <button type="submit" class="button-secondary">Save</button>
            </form>

        </div>
    </div>
</div>


<script>
    let postTypeAttributesWAl = ["post_author", "post_name", "post_title", "post_content", "post_category"];
    let postTypeAttributes = ["post_author", "post_name", "post_title", "post_content", "post_status", "post_type", "post_category"]

    postTypeAttributesWAl.forEach(el => {
        let optionSelect;

        if (el === "post_category") {
            optionSelect = `<option value="string">String</option><option value="arrayString">Array String</option>`
        } else {
            optionSelect = `<option value="string">String</option><option value="number">Number</option><option value="bool">Boolean</option><option value="imgbool">Image</option><option value="arrayInt">Array Int</option><option value="arrayString">Array String</option><option value="arrayBoolean">Array Boolean</option><option value="arrayImage">Array Image</option>`
        }


        document.querySelector(`#input_number_types_${el}`).addEventListener("change", (e) => {
            let number = e.target.value
            let addElements = "";
            for (let index = 0; index < number; index++) {
                addElements = addElements + `
                    <div class="inputs_dynamic_json">
                        <label title="If the type is Array'any' they will be added linearly" for="json_configuration_${el}_posttype_${index}" style="margin:5px;">
                            Type
                        </label>
                        <select title="If the type is Array'any' they will be added linearly" name="json_configuration_${el}_posttype_create_type_${index}" id="json_configuration_${el}_posttype_create_type_${index}">
                            ${optionSelect}
                        </select>
                        <label title="If there are levels deep use the ':' like this: 'properties:action:remenber'" for="json_configuration_${el}_posttype_create_name_${index}" style="margin:5px;">
                            Name
                        </label>
                        <input title="If there are levels deep use the ':' like this: 'properties:action:remenber'" type="text" name="json_configuration_${el}_posttype_create_name_${index}" id="json_configuration_${el}_posttype_create_name_${index}">
                    </div>
                    `
            }
            document.querySelector(`.multiples_json_properties_configurations_${el}`).innerHTML = ""
            document.querySelector(`.multiples_json_properties_configurations_${el}`).innerHTML = addElements
        })
    })

    let countPostTypeArrow = 0
    postTypeAttributes.forEach(elem => {

        document.querySelector(`.material-icons.arrowX.despla.${elem}`).addEventListener("click", (e) => {
            if (countPostTypeArrow > 1) {
                countPostTypeArrow = 0
            }
            if (countPostTypeArrow == 0) {
                document.querySelector(`.content.postype.config.arrow_${elem}`).style.display = 'block'
                e.target.innerHTML = "keyboard_arrow_down"
            } else {
                document.querySelector(`.content.postype.config.arrow_${elem}`).style.display = 'none'
                e.target.innerHTML = "keyboard_arrow_right"
            }
            countPostTypeArrow++
            console.log(countPostTypeArrow)
        })
    })
</script>

<script>

    function btnEndpointsEdit(i){
        console.log("DaDNALDNALKDN "+i)
    }

    function settingsEndpoints(){
        
    }

</script>

<style>
    i.material-icons.arrowX.despla {
        color: var(--color-secondary);
    }

    i.material-icons.arrowX.despla:hover {
        cursor: pointer;
    }

    /* Estilos para el contenedor principal */
    .query {
        background-color: var(--color-background);
        padding: 10px;
        margin-bottom: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        height: 100px;
    }

    /* Estilos para el título */
    .query h3 {
        font-size: 24px;
        margin: 0;
        color: var(--color-primary);
    }

    /* Estilos para el contenedor de acción */
    .action {
        margin-top: 10px;
        background-color: var(--color-white);
        padding: 10px;
        border-radius: 5px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* Estilos para el selector de acción */
    #actionTodoEndpoint {
        font-size: 18px;
        padding: 5px;
        border: none;
        border-radius: 3px;
        background: var(--color-gradient-principal);
        color: var(--color-white);
        cursor: pointer;
    }

    /* Estilos para la opción deshabilitada */
    #actionTodoEndpoint option {
        color: gray;
    }

    #actionTodoEndpoint option[disabled] {
        color: var(--color-primary);
    }

    /* Estilos para los botones */
    .button-primary {
        background-color: var(--color-primary-buttons);
        color: var(--color-white);
    }

    .button-secondary {
        background-color: var(--color-secondary-buttons);
        color: var(--color-white);
    }

    .button-primary:hover,
    .button-secondary:hover {
        background-color: var(--color-hover-buttons);
    }

    .posttype.json form {
        width: 693px;
    }

    /* Comment Status */
    /* Estilos para el contenedor principal */
    .postype.config {
        background-color: var(--color-background);
        padding: 10px;
        margin-bottom: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        height: auto;
        width: 100%;
    }



    /* Estilos para el título */
    .postype.config h2 {
        font-size: 24px;
        margin: 0;
        color: var(--color-primary);
    }

    /* Estilos para la descripción */
    .postype.config h3 {
        font-size: 16px;
        margin: 0;
        color: var(--color-secondary);
    }

    /* Estilos para el contenido */
    .postype.config p {
        font-size: 16px;
        margin: 0;
        color: black;
    }

    /* Estilos para el contenedor de configuración */
    .postype.config {
        background-color: var(--color-white);
        padding: 10px;
        border-radius: 5px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 10px;
    }

    /* Estilos para el contenedor de configuración */
    .postype.config h2 {
        font-size: 20px;
        margin: 0;
        color: var(--color-primary);
        margin-right: 10px;
    }

    /* Estilos para el contenedor de configuración */
    .postype.config p {
        font-size: 18px;
        margin: 0;
        color: black;
    }

    /* Estilos para el input */
    .postype.config input {
        font-size: 16px;
        padding: 5px;
        border: none;
        border-radius: 3px;
        background: var(--color-gradient-principal);
        color: var(--color-white);
        cursor: pointer;
    }

    /* Estilos para el botón de guardar */
    .postype.config button {
        font-size: 16px;
        padding: 5px 10px;
        border: none;
        border-radius: 3px;
        background-color: var(--color-primary-buttons);
        color: var(--color-white);
        cursor: pointer;
    }

    /* Estilos para el botón de guardar al pasar el cursor */
    .postype.config button:hover {
        background-color: var(--color-hover-buttons);
    }

    /* Comment Status */
</style>

<style>
    .endpoints > div{
        width: 710px;
        display: flex;
        overflow: scroll;
    }

    .endpoints > div div button{
        padding: 15px;
        background: var(--color-gradient-principal);
        border-radius: 15px;
        border-color: transparent;
        color: white;
    }

    .endpoints > div div button:hover{
        cursor: pointer;
    }

</style>