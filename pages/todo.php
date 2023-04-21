<?php
require_once dirname(__FILE__, 2) . '\const\const.php';

$postElements = ["comment_status", "post_author", "post_name", "post_title", "post_content", "post_status", "post_type", "post_category", "featured_image", "next"];

enum Suit
{
}

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
            $urlBase = "https://localhost/proyectos";
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
                        <a href="https://localhost/proyectos/estudio/wp-admin" target="_blank">https://localhost/proyectos/estudio/wp-admin</a>
                        <br />
                        <button onclick="settingsEndpoints(<?php echo $i ?>, 'Name Api','<?php echo $urlBase ?>', [{ endpoint: 'action', queries: [{ query: 'aK', value: 'aaaaaaaaaaK',action: {type: 'jsonPC',actions: {comment_status: false,post_author: [{type:'string', value:'names:author'}],post_category: [{type: 'Array String', value: 'categories?names:category_name'}, {type: 'String', value: 'category'}],post_content: [{type: 'String', value: 'content'}, {type: 'Array String', value: 'contents?title'}, {type: 'Array String', value: 'contents?value'}],post_name: [{type: 'String', value: 'name'}],post_title: [{type: 'String', value: 'title'}],post_type: {type: 'String', value: 'type'},featured_image: 'content:portal_image',post_status: {type: 'String', value: 'status'}}} }, { query: 'bK', value: 'bbbbbbbbK',action: {type: 'saveImage',actions: {name: 'claksnc:cas',save: true}} }, { query: 'cK', value: 'cccccccccK',action: {type: 'jsonPC',actions: {comment_status: true,post_author: [{type:'string', value:'names:author'}],post_category: [{type: 'Array String', value: 'categories?names:category_name'}, {type: 'String', value: 'category'}],post_content: [{type: 'String', value: 'content'}, {type: 'Array String', value: 'contents?title'}, {type: 'Array String', value: 'contents?value'}],post_name: [{type: 'String', value: 'name'}],post_title: [{type: 'String', value: 'title'}],post_type: {type: 'String', value: 'type'},featured_image: 'content:portal_image',post_status: {type: 'String', value: 'status'}}} }, { query: 'sK', value: 'sssssssK',action: {type: 'saveImage',actions: {name: 'claksnc:cas',save: true}} }] }])">Edit Queries</button>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <br>
    <div class="endpoints" id="initd" style="display: none; margin: 15px;">
        <h3>Endpoints:</h3>
        <div></div>
    </div>
    <div class="endpoints" id="querysd" style="display: none; margin: 15px;">
        <h3>Query's:</h3>
        <div></div>
    </div>
    <div class="connection_api configurationToDoEndpoints container" style="display: none;">
        <div class="query">
            <h3>{url}/{endpoint}?{query}</h3>
        </div>
        <div class="action">
            <select name="actionTodoEndpoint" class='selectCSS' id="actionTodoEndpoint" title="Select To Action">
                <option value="endp">Select Action For Endpoint Endpoint</option>
                <option value="post-type">Post Type</option>
                <option value="save-image">Save Images</option>
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
                    } else if ($apE === "next") {
                    ?>
                        <div class="postype config dynamic <?php echo $apE ?>">
                            <i title="Arrow for <?php echo $apE ?>" class="material-icons arrowX despla <?php echo $apE ?>">keyboard_arrow_right</i>
                            <h4><?php echo $apE ?>?</h4>
                            <div class="content postype config arrow_<?php echo $apE ?>" style="display: none">
                                <h2><?php echo $apE ?>?</h2>
                                <h3>When creating the post should we call a next page?</h3>
                                <label>
                                    Where we find the next in the json?
                                </label>
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
                                        <label class="content-input" for="url_complete_q" style="margin: 10px">
                                            <input type="checkbox" name="url_complete_q" id="url_complete_q">Is the URL complete?
                                            <i></i>
                                        </label>
                                    </div>
                                </div>
                            </div>
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

                                                <label title="If there are levels deep use the ':' like this: 'properties:action:remember'" for="json_configuration_<?php echo $apE ?>_posttype_create_name" style="margin:5px;">
                                                    Name
                                                </label>
                                                <input title="If there are levels deep use the ':' like this: 'properties:action:remember'" type="text" name="json_configuration_<?php echo $apE ?>_posttype_create_name" id="json_configuration_<?php echo $apE ?>_posttype_create_name">
                                            </div>
                                            <label class="content-input" for="no_dynamic_status">
                                                <input type="checkbox" name="no_dynamic_status" id="no_dynamic_status"> With this option, all posts will have the type of status that you define below if it does not agree with what you put above
                                                <i></i>
                                            </label>
                                            <div class="no dynamic">
                                                <label for="no-dynamic-publish">Select option for status</label>
                                                <select name="no-dynamic-publish" id="no-dynamic-publish">
                                                    <option disabled value="select status">select status</option>
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
                    } else if ($apE === "featured_image") {
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
                                        <input title="Only properties of type string can be" name="json_configuration_<?php echo $apE ?>_posttype_create_type" id="json_configuration_<?php echo $apE ?>_posttype_create_type" value="Featured Image" disabled>

                                        <label title="If there are levels deep use the ':' like this: 'properties:action:remember'" for="json_configuration_<?php echo $apE ?>_posttype_create_name" style="margin:5px;">
                                            Name
                                        </label>
                                        <input title="If there are levels deep use the ':' like this: 'properties:action:remember'" type="text" name="json_configuration_<?php echo $apE ?>_posttype_create_name" id="json_configuration_<?php echo $apE ?>_posttype_create_name">
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
        <div class="image val" style="display: none;">
            <form action="" method="post">
                <div class="postype config dynamic save-image">
                    <i title="Arrow for save-image" class="material-icons arrowX despla save-image">keyboard_arrow_right</i>
                    <h4>Save Image</h4>
                    <div class="content postype config arrow_save-image" style="display: none">
                        <h2>Save Image</h2>
                        <h3>What Key of the json of the response will be in the save image</h3>
                        <p>Note: The images will be saved in the root path by default of wordpress</p>
                        <label>
                            How many keys will be used here <input id="input_number_types_save-image" type="number" value="0">
                        </label>
                        <div>
                            <div class="multiples_json_properties_configurations_save-image" style="margin:5px;"></div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="button-secondary">Save</button>
            </form>
        </div>
    </div>
</div>


<script>
    let postTypeAttributesWAl = ["post_author", "post_name", "post_title", "post_content", "post_category"];
    let postTypeAttributes = ["post_author", "post_name", "post_title", "post_content", "post_status", "post_type", "post_category", "featured_image", "next"]

    postTypeAttributesWAl.forEach(el => {
        let optionSelect;

        if (el === "post_category") {
            optionSelect = `<option value="string">String</option><option value="arrayString">Array String</option>`
        } else if (el === "post_content") {
            optionSelect = `
            <option value="string">String</option>
            <option value="number">Number</option>
            <option value="bool">Boolean</option>
            <option value="img">Image</option>
            <option value="video" title="if you choose video keep in mind that you will need Video-Js">Video</option>
            <option value="arrayInt">Array Int</option>
            <option value="arrayString">Array String</option>
            <option value="arrayBoolean">Array Boolean</option>
            <option value="arrayImage">Array Image</option>
            <option value="arrayVideo" title="if you choose video keep in mind that you will need Video-Js">Array Video</option>`
        } else {
            optionSelect = `
            <option value="string">String</option>
            <option value="number">Number</option>
            <option value="bool">Boolean</option>
            <option value="arrayInt">Array Int</option>
            <option value="arrayString">Array String</option>
            <option value="arrayBoolean">Array Boolean</option>`
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
    let imageContainer = document.querySelector(".image.val")
    let postTypeContainer = document.querySelector(".posttype.json")

    const EnumTb = Object.freeze({
        JSON: "jsonPC",
        SAVEIMG: "saveImage"
    })

    function btnEndpointsEdit(id, queries, nameEndpoint, urlBase) {
        let containerQueries = document.querySelector(".endpoints#querysd");
        let containerDivQueries = document.querySelector(".endpoints#querysd div");
        document.querySelector(".endpoints#querysd h3").innerHTML = `Query's for ${nameEndpoint}`;

        let elementQueries = ``;


        let queriesS = convertArrayQueryToString(queries)

        queries.forEach((e, index, array) => {

            let jsonProperty = convertJsonPropertiesToString(e, -1, array)

            elementQueries += `<div title="Press to configure this query '${e.query}'">
                    <button onclick="btnQuerySetUp(${queriesS}, ${jsonProperty}, '${urlBase}', '${nameEndpoint}')">${urlBase}/${nameEndpoint}?${e.query}=${e.value}</button>
                </div>`
        })

        containerDivQueries.innerHTML = elementQueries
        containerQueries.style.display = "block"
    }

    function btnQuerySetUp(queries, query, urlBase, nameEndpoint) {
        let tileQuery = document.querySelector(".connection_api.configurationToDoEndpoints.container")
        let tileQueryTime = document.querySelector(".connection_api.configurationToDoEndpoints.container .query h3")

        tileQueryTime.innerHTML = `${urlBase}/${nameEndpoint}?${query.query}=${query.value}`


        tileQuery.style.display = "block"

        if (query.action || query.action.type || query.action.actions) {
            if (query.action.type === EnumTb.JSON) {
                createPostJsonSee(query.action.actions)
            } else if (query.action.type === EnumTb.SAVEIMG) {
                saveImageSee(query.action.actions)
            }
        }
    }

    function createPostJsonSee(actions) {
        //TODO: Implementar el llenado de INPUTS



        document.querySelector("#actionTodoEndpoint").value = "post-type"
        imageContainer.style.display = "none"
        postTypeContainer.style.display = "block"
    }

    function saveImageSee(actions) {
        //TODO: Implementar el llenado de INPUTS



        document.querySelector("#actionTodoEndpoint").value = "save-image"
        imageContainer.style.display = "block"
        postTypeContainer.style.display = "none"
    }

    function settingsEndpoints(id, nameApi, urlBase, endpoints) {
        let containerEndpoint = document.querySelector(".endpoints#initd");
        let containerDivEndpoint = document.querySelector(".endpoints#initd div");
        let containerH3Endpoint = document.querySelector(".endpoints#initd h3");

        let elementEndpoints = ``;

        containerH3Endpoint.innerHTML = `Endpoints for ${nameApi}:`

        endpoints.forEach((e, index) => {
            let endpointNameProv = e.endpoint
            let endpointQueriesProv = e.queries

            let strQueriesProvS = convertArrayQueryToString(endpointQueriesProv)

            elementEndpoints += `<div title="Press to configure this endpoint '${endpointNameProv}'">
                                    <button onclick="btnEndpointsEdit(${id}, ${strQueriesProvS}, '${endpointNameProv}', '${urlBase}')">${endpointNameProv}</button>
                                </div>`
        })

        containerDivEndpoint.innerHTML = elementEndpoints

        containerEndpoint.style.display = "block"
    }

    document.querySelector("#actionTodoEndpoint").addEventListener("change", e => {
        let select = e.target.value

        if (select === "post-type") {
            imageContainer.style.display = "none"
            postTypeContainer.style.display = "block"
        } else if (select === "save-image") {
            postTypeContainer.style.display = "none"
            imageContainer.style.display = "block"
        }

    })

    function convertArrayQueryToString(arrayS) {
        let strQueriesProv = `[`;
        arrayS.forEach((e, index, array) => {
            strQueriesProv += convertJsonPropertiesToString(e, index, array)
        })

        strQueriesProv += `]`;

        return strQueriesProv
    }

    function convertJsonPropertiesToString(e, index, array) {
        let actions = ``
        let strQuery = ``
        if (e.action.type === "jsonPC") {
            actions += convertJsonPostCreateToString(e.action.actions)
        } else if (e.action.type === "saveImage") {
            actions += convertSaveImageToString(e.action.actions)
        }

        if (index === (array.length - 1) || index === -1) {
            strQuery += `{
                                          query: '${e.query}',
                                          value: '${e.value}',
                                          action: {
                                            type: '${e.action.type}',
                                            actions: ${actions}
                                          }
                                    }`
        } else {
            strQuery += `{
                                          query: '${e.query}',
                                          value: '${e.value}',
                                          action: {
                                            type: '${e.action.type}',
                                            actions: ${actions}
                                          }
                                   },`
        }
        return strQuery
    }

    function convertJsonPostCreateToString(obj) {
        let actionA = `{
            comment_status: ${obj.comment_status},
            featured_image: '${obj.featured_image}',
            post_status: {
                type: '${obj.post_status.type}',
                value: '${obj.post_status.value}'
            },
            post_type: {
                type: '${obj.post_type.type}',
                value: '${obj.post_type.value}'
            },
            post_author: [
        `
        obj.post_author.forEach((e, index, array) => {
            if (index === (array.length - 1)) {
                actionA += `
                    {
                        type: '${e.type}',
                        value: '${e.value}'
                    }
                `
            } else {
                actionA += `
                    {
                        type: '${e.type}',
                        value: '${e.value}'
                    },
                `
            }
        })

        actionA += `],
            post_name: [
        `
        obj.post_name.forEach((e, index, array) => {
            if (index === (array.length - 1)) {
                actionA += `
                    {
                        type: '${e.type}',
                        value: '${e.value}'
                    }
                `
            } else {
                actionA += `
                    {
                        type: '${e.type}',
                        value: '${e.value}'
                    },
                `
            }
        })
        actionA += `],
            post_category: [
        `
        obj.post_category.forEach((e, index, array) => {
            if (index === (array.length - 1)) {
                actionA += `
                    {
                        type: '${e.type}',
                        value: '${e.value}'
                    }
                `
            } else {
                actionA += `
                    {
                        type: '${e.type}',
                        value: '${e.value}'
                    },
                `
            }
        })
        actionA += `],
            post_title: [
        `
        obj.post_title.forEach((e, index, array) => {
            if (index === (array.length - 1)) {
                actionA += `
                    {
                        type: '${e.type}',
                        value: '${e.value}'
                    }
                `
            } else {
                actionA += `
                    {
                        type: '${e.type}',
                        value: '${e.value}'
                    },
                `
            }
        })
        actionA += `],
            post_content: [
        `
        obj.post_content.forEach((e, index, array) => {
            if (index === (array.length - 1)) {
                actionA += `
                    {
                        type: '${e.type}',
                        value: '${e.value}'
                    }
                `
            } else {
                actionA += `
                    {
                        type: '${e.type}',
                        value: '${e.value}'
                    },
                `
            }
        })
        actionA += `]}`

        return actionA
    }

    function convertSaveImageToString(obj) {
        return `
            {
                name: '${obj.name}',
                save: ${obj.save}
            }
        `
    }
</script>

<script>
    let countSaveImageValue = 0
    document.querySelector(".material-icons.arrowX.despla.save-image").addEventListener("click", (e) => {
        if (countSaveImageValue > 1) {
            countSaveImageValue = 0
        }
        if (countSaveImageValue == 0) {
            document.querySelector(`.content.postype.config.arrow_save-image`).style.display = 'block'
            e.target.innerHTML = "keyboard_arrow_down"
        } else {
            document.querySelector(`.content.postype.config.arrow_save-image`).style.display = 'none'
            e.target.innerHTML = "keyboard_arrow_right"
        }
        countSaveImageValue++
        console.log(countSaveImageValue)
    })

    document.querySelector("#input_number_types_save-image").addEventListener("change", (e) => {
        let number = e.target.value
        let addElements = "";
        for (let index = 0; index < number; index++) {
            addElements += `<div class="inputs_dynamic_json">
                        <label title="You can only add url of type String" for="json_configuration_save-image_posttype_${index}" style="margin:5px;">
                            Type
                        </label>
                        <input title="You can only add url of type String" name="json_configuration_save-image_posttype_create_type_${index}" id="json_configuration_save-image_posttype_create_type_${index}" value="String" disabled>
                        <label title="If there are levels deep use the ':' like this: 'properties:action:remember'" for="json_configuration_save-image_posttype_create_name_${index}" style="margin:5px;">
                            Name
                        </label>
                        <input title="If there are levels deep use the ':' like this: 'properties:action:remember'" type="text" name="json_configuration_save-image_posttype_create_name_${index}" id="json_configuration_save-image_posttype_create_name_${index}">
                    </div>`
        }

        document.querySelector(".multiples_json_properties_configurations_save-image").innerHTML = addElements
    })
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
    .selectCSS {
        font-size: 18px;
        padding: 5px;
        border: none;
        border-radius: 3px;
        background: var(--color-gradient-principal);
        color: var(--color-white);
        cursor: pointer;
    }

    /* Estilos para la opción deshabilitada */
    .selectCSS option {
        color: gray;
    }

    .selectCSS option[disabled] {
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
    .endpoints>div {
        width: 710px;
        display: flex;
        overflow: scroll;
    }

    .endpoints>div div button {
        padding: 15px;
        background: var(--color-gradient-principal);
        border-radius: 15px;
        border-color: transparent;
        color: white;
    }

    .endpoints>div div button:hover {
        cursor: pointer;
    }
</style>