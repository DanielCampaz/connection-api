<?php
require_once dirname(__FILE__, 2) . '\const\const.php';


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
                        <button onclick="addEndpointsQuerys(65465, ['aas', 'Sas/s', 'csca', '<?php echo $i ?>'] )">Edit Queries or Add Query</button>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
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
        <div class="connection_api query add" style="padding: 83px; display:none">
            <h3>Add Query</h3>
            <form action="">
                <input type="hidden" name="query_id" id="query_id">
                <div class="action">
                    <select name="selectEndpointDV" id="selectEndpointDV" class='selectCSS' title="Select To Action"></select>
                </div>
                <label for="">
                    Query: <input type="text" name="query_name" id="query_name">
                </label>
                <label for="">
                    Value: <input type="text" name="query_value" id="query_value">
                </label>
                <input class="connection_api btn" type="submit" value="Save">
            </form>
        </div>
        <div class="connection_api query edit" style="padding: 83px; display:none">
            <h3>Edit Query</h3>
            <form action="">
                <input type="hidden" name="query_id_edit" id="query_id_edit">
                <label for="">
                    Endpoint: <input disabled type="text" name="endpoint_name_edit" id="endpoint_name_edit">
                </label>
                <br>
                <label for="">
                    Query: <input type="text" name="query_name_edit" id="query_name_edit">
                </label>
                <label for="">
                    Value: <input type="text" name="query_value_edit" id="query_value_edit">
                </label>
                <input class="connection_api btn" type="submit" value="Save">
            </form>
        </div>
    </div>
</div>
<script>
    function addEndpointsQuerys(id, endpointsList) {
        let containerP = document.querySelector(".connection_api.endpoints.Action div")
        let element = ''
        let selectAdd = '<option disabled>Select Endpoint</option>'

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
                    <button onclick="addQueryA(${id})">Add Query</button>
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
        element = ""

        element += `
        <div title="Press to Add Query">
                    <button onclick="addQueryA(${id})">Add Query</button>
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
        document.querySelector('#query_name_edit').value = query
        document.querySelector('#query_value_edit').value = value

        document.querySelector(".connection_api.query.add").style.display = 'none'
        document.querySelector(".connection_api.query.edit").style.display = 'block'
    }

    function addQueryA(id) {//query_id

        document.querySelector('#query_id').value = id


        document.querySelector(".connection_api.query.edit").style.display = 'none'
        document.querySelector(".connection_api.query.add").style.display = 'block'
    }
</script>