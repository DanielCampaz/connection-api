<?php
require_once dirname(__FILE__, 2) . '\const\const.php';
if($_POST && array_key_exists("type_form_request", $_POST)){
    // if($_POST["type_form_request"] === "edit"){
    // }else if($_POST["type_form_request"] === "add"){ 
    // }
    print_r($_POST);
}

?>
<div>
    <div class="connection_api titles">
        <h1 class="connection_api request title"><?php echo $NAME_APPLICATION_REQUEST ?></h1>
        <p class="connection_api request guide"><?php echo $GUIDE_REQUEST ?></p>
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
                        <a href="https://localhost/proyectos/estudio/wp-admin" target="_blank">https://localhost/proyectos/estudio/wp-admin</a>
                        <br />
                        <button onclick="addEndpointsQuerys(65465, 'NameApi', ['aas', 'Sas/s', 'csca', '<?php echo $i ?>'] )">Edit Queries or Add Query</button>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <br>
    <div class="connection_api">
        <div class="connection_api endpoints Action" style="display: none;">
            <h3>Endpoints:</h3>
            <div></div>
        </div>
    </div>
    <div class="connection_api">
        <div class="connection_api endpoints Action querys" style="display: none;">
            <h3>Query's:</h3>
            <div></div>
        </div>
    </div>
    <div class="connection_api">
        <div class="connection_api query add" style="height: 100%; padding: 53px; display:none">
            <h3>Add Query</h3>
            <form action="" method="post">
                <input type="hidden" name="type_form_request" value="add">
                <input type="hidden" name="query_id" id="query_id">
                <div class="action">
                    <select name="selectEndpointDV" id="selectEndpointDV" class='selectCSS' title="Select To Action"></select>
                </div>
                <br>
                <label for="">
                    Select what type will be sent
                    <select name="selectTypeACA" class='selectCSS' title="Select To Type Request">
                        <option value="query" selected>Query</option>
                        <option value="body">Body</option>
                    </select>
                </label>
                <br>
                <label for="">
                    Key: <input type="text" name="query_name" id="query_name">
                </label>
                <label for="">
                    Value: <input type="text" name="query_value" id="query_value">
                </label>
                <br>
                <label class="if_object" style="display: none;">if it is an array this route will be applied to each of the objects inside the array</label>
                <br>
                <label for="">Type of Response
                    <select name="select_type_response" id="select_type_response">
                        <option value="array">Array</option>
                        <option value="object" selected>Object</option>
                    </select>
                </label>
                <label for="">
                    Route to get to the Data:<input type="text" name="route_for_data" id="route_for_data" title="Use the depth level like this parent:child">
                </label>
                <input class="connection_api btn" type="submit" value="Save">
                <div> </div>
            </form>
        </div>
        <div class="connection_api query edit" style="height: 100%; padding: 53px; display:none">
            <h3>Edit Query</h3>
            <form action="" method="post">
                <input type="hidden" name="type_form_request" value="edit">
                <input type="hidden" name="query_id_edit" id="query_id_edit">
                <input type="hidden" name="endpoint_name_edit" id="endpoint_name_edit">
                <label for="">
                    Endpoint: <input disabled type="text" name="endpoint_name_edit_disbled" id="endpoint_name_edit_disbled">
                </label>
                <br>
                <label for="">
                    Select what type will be sent
                    <select name="selectTypeACAEdit" class='selectCSS' title="Select To Type Request">
                        <option value="query" selected>Query</option>
                        <option value="body">Body</option>
                    </select>
                </label>
                <br>
                <label for="">
                    Key: <input type="text" name="query_name_edit" id="query_name_edit">
                </label>
                <label for="">
                    Value: <input type="text" name="query_value_edit" id="query_value_edit">
                </label>
                <br>
                <label class="if_object_edit" style="display: none;">If it is an array this route will be applied to each of the objects inside the array</label>
                <br>
                <label for="">Type of Response
                    <select name="select_type_response_edit" id="select_type_response_edit">
                        <option value="array">Array</option>
                        <option value="object" selected>Object</option>
                    </select>
                </label>
                <label for="">
                    Route to get to the Data:<input type="text" name="route_for_data_edit" id="route_for_data_edit" title="Use the depth level like this parent:child">
                </label>
                <input class="connection_api btn" type="submit" value="Save">
                <div></div>
            </form>
        </div>
    </div>
</div>

<script>
    function addEndpointsQuerys(id, nameApi, endpointsList) {
        let containerP = document.querySelector(".connection_api.endpoints.Action div")
        let containerH3 = document.querySelector(".connection_api.endpoints.Action h3")
        let element = ''
        let selectAdd = '<option value="selectE" disabled>Select Endpoint</option>'

        containerH3.innerHTML = `Endpoints for ${nameApi}:`

        endpointsList.forEach((e, index) => {
            element += `
                    <div title="Press to configure this endpoint ${index+1}">
                        <button onclick="addEndpointQuerys(${id},'${e}', [{query:'a', value:'aaaaaaaaaa'}, {query:'b', value:'bbbbbbbb'}, {query:'c', value:'ccccccccc'}, {query: '${index+1}', value: 'aaaaaaaaa'}])">${e}</button>
                    </div>
            
            `
            selectAdd += `
                <option value="${e}">${e}</option>
            `

        });
        containerP.innerHTML = element

        document.querySelector(".connection_api.endpoints.Action.querys div").innerHTML = `
        <div title="Press to Add Query">
                    <button onclick="addQueryA(${id}, 'default')">Add Query</button>
                </div>
        `

        document.querySelector("#selectEndpointDV").innerHTML = selectAdd

        document.querySelector('#query_id').value = id

        document.querySelector(".connection_api.endpoints.Action").style.display = "block"
        document.querySelector(".connection_api.endpoints.Action.querys").style.display = "block"
    }

    function addEndpointQuerys(id, endpoint, querysList) {
        if (querysList.length <= 0) return
        let containerP = document.querySelector(".connection_api.endpoints.Action.querys div")
        let containerH3 = document.querySelector(".connection_api.endpoints.Action.querys h3")
        element = ""

        containerH3.innerHTML = `Query's for ${endpoint}:`

        element += `
        <div title="Press to Add Query">
                    <button onclick="addQueryA(${id}, '${endpoint}')">Add Query</button>
                </div>
        `

        querysList.forEach((e, index) => {
            element += `
                    <div title="Press to configure this query ${e.query}">
                        <button onclick="editQuery(${id}, '${e.query}', '${e.value}', '${endpoint}')">${e.query}</button>
                    </div>
            
            `
        });
        containerP.innerHTML = element
        document.querySelector(".connection_api.endpoints.Action.querys").style.display = "block"
    }

    function editQuery(id, query, value, endpoint) {

        document.querySelector('#query_id_edit').value = id
        document.querySelector('#endpoint_name_edit').value = endpoint
        document.querySelector('#endpoint_name_edit_disbled').value = endpoint
        document.querySelector('#query_name_edit').value = query
        document.querySelector('#query_value_edit').value = value

        document.querySelector(".connection_api.query.add").style.display = 'none'
        document.querySelector(".connection_api.query.edit").style.display = 'block'
    }

    function addQueryA(id, endpoint) { //query_id
        let endpointt = endpoint
        if (endpoint === "default") {
            endpointt = "selectE"
        }
        document.querySelector('#query_id').value = id
        document.querySelector("#selectEndpointDV").value = endpointt

        document.querySelector(".connection_api.query.edit").style.display = 'none'
        document.querySelector(".connection_api.query.add").style.display = 'block'
    }
</script>

<script>
    document.querySelector("#select_type_response_edit").addEventListener("change", (e) => {
        if (e.target.value === "array") {
            document.querySelector(".if_object_edit").style.display = "block"
        }else{
            document.querySelector(".if_object_edit").style.display = "none"
        }
    })
    document.querySelector("#select_type_response").addEventListener("change", (e) => {
        if (e.target.value === "array") {
            document.querySelector(".if_object").style.display = "block"
        }else{
            document.querySelector(".if_object").style.display = "none"
        }
    })
</script>