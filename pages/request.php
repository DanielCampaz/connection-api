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
                    <div class="header">
                        <h1>Name Api</h1>
                    </div>
                    <div class="body">
                        <h4>Session?: True</h4>
                        <h4>Refresh Token: 10 HRS</h4>
                        <h4>Api Key?: True</h4>
                        <h4>Api Key Value: EacnE3fo35vm1313#cvlk</h4>
                    </div>
                    <div class="footer">
                        <a href="https://localhost/proyectos/estudio/wp-admin">https://localhost/proyectos/estudio/wp-admin</a>
                        <br />
                        <button onclick="editInfoS(65465, 'prueba','https/localhost:5000', true, 10, 'dscampaz3110@gmail.com', 'daniel2008b', 'auth/login', true, '1321casc5efa11e51' )">Edit Info</button>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <div class="connection_api container edit">
        <div class="connection_api form add">
            <h1>Form To Edit Api Properties</h1>
            <div class="connection_api from_request edit" action="" method="post">
                <input type="hidden" name="id_api_request_edit" id="id_api_request_edit">
                <div class="connection_api content">
                    <div>
                        <label for="name_api_request_edit">Name API: </label>
                        <input disabled type="text" name="name_api_request_edit" id="name_api_request_edit">
                    </div>
                    <div>
                        <label for="url_api_base_request_edit">Base Url: </label>
                        <input disabled type="text" name="url_api_base_request_edit" id="url_api_base_request_edit">
                        <label for="url_api_base_request_edit">/</label>
                    </div>
                </div>
                <div class="connection_api content">
                    <div title="Your Api need Init Session?">
                        <label class="content-input" for="need_session_request_edit">
                            <input disabled type="checkbox" name="need_session_request_edit" id="need_session_request_edit"> Session?
                            <i></i>
                        </label>
                    </div>
                    <div title="How often should the token be refreshed?">
                        <label for="refresh_token_request_edit">Refresh Token: </label>
                        <input disabled type="number" name="refresh_token_request_edit" id="refresh_token_request_edit">
                        <label for="refresh_token_request_edit">HRS</label>
                    </div>
                </div>
                <div class="connection_api content">
                    <div title="Email for access to API">
                        <label for="email_credential_api_request_edit">Email: </label>
                        <input disabled type="text" name="email_credential_api_request_edit" id="email_credential_api_request_edit">
                    </div>
                    <div title="Password for access to API" style="display: flex; align-items: center;">
                        <label for="password_credential_api__requestedit">Password: </label>
                        <input disabled type="password" name="password_credential_api_request_edit" id="password_credential_api_request_edit">
                        <i class="material-icons">visibility_off</i>
                    </div>
                </div>
                <div class="connection_api content">
                    <div title="Endpoint for the Session">
                        <label for="endpoint_session_request_edit" class="endpoint_session_request_edit">Endpoint Session:</label>
                        <input disabled type="text" name="endpoint_session_request_edit" id="endpoint_session_request_edit">
                    </div>
                </div>
                <div class="connection_api content">
                    <div title="Your Api need Api Key?">
                        <label class="content-input" for="api_key_request_edit">
                            <input disabled type="checkbox" name="api_key_request_edit" id="api_key_request_edit" value="Api Key_request_edit"> Api Key?
                            <i></i>
                        </label>
                    </div>
                    <div style="display: flex; align-items: center;">
                        <label for="api_key_text_request_edit">Api Key: </label>
                        <input disabled type="password" name="api_key_text_request_edit" id="api_key_text_request_edit">
                        <i class="material-icons">visibility_off</i>
                    </div>
                </div>
        </div>
            <form action="" method="post" style="display: flex; align-items: center; flex-direction: column;">
                <div class="connection_api content">
                    <div>
                        <label for="endpoints_api_request_edit">Endpoints Count: </label>
                        <input type="number" name="endpoints_api_request_edit" id="endpoints_api_request_edit">
                    </div>
                </div>
                <div class="connection_api properties" style="width: 600px; display: flex; flex-wrap: wrap;"></div>
                <input class="connection_api btn" type="submit" value="Save">
            </form>
        </div>
    </div>
</div>
<script>
    document.querySelector("#endpoints_api_request_edit").addEventListener("change", (event) => {
        let count = document.querySelector("#endpoints_api_request_edit").value;
        let containerPrincipal = document.querySelector(".connection_api.properties")
        //let baseUrl = document.querySelector("#url_api_base_request_edit").value

        let elements = "";
        for (let index = 0; index < count; index++) {
            elements += `
                    <div style="margin:5px;">
                        <label for="endpoints_api_request_edit_src_${index+1}" style="margin:5px;">
                            Endpoint ${index+1}
                        </label>
                        <input type="text" name="endpoints_api_request_edit_src_${index+1}" id="endpoints_api_request_edit_src_${index+1}">
                    </div>`
        }

        containerPrincipal.innerHTML = elements

    })

    function editInfoS(id, nameapi, baseurl, session, tokentime, email, password, endpoint, apikey, apikeynum) {
        let NameApi = document.querySelector("#name_api_request_edit")
        let BaseUrl = document.querySelector("#url_api_base_request_edit")
        let Session = document.querySelector("#need_session_request_edit")
        let TokenTime = document.querySelector("#refresh_token_request_edit")
        let ApiKey = document.querySelector("#api_key_request_edit")
        let ApiKeyNum = document.querySelector("#api_key_text_request_edit")
        let Email = document.querySelector("#email_credential_api_request_edit")
        let Password = document.querySelector("#password_credential_api_request_edit")
        let Id = document.querySelector("#id_api_request_edit")
        let EndpointSession = document.querySelector("input#endpoint_session_request_edit")

        NameApi.value = nameapi;
        BaseUrl.value = baseurl;
        Session.checked = session;
        TokenTime.value = tokentime;
        ApiKey.checked = apikey;
        ApiKeyNum.value = apikeynum;
        Email.value = email;
        Password.value = password;
        Id.value = id;
        EndpointSession.value = endpoint

        document.querySelector("label.endpoint_session_request_edit").innerHTML = baseurl + "/"
    }

    let countEditKeyToText2 = 0
    let countEditPasswordToText2 = 0
    document.querySelector("#api_key_text_request_edit~i").addEventListener("click", e => {
        if (countEditKeyToText2 > 1) {
            countEditKeyToText2 = 0
        }
        if (countEditKeyToText2 == 0) {
            document.querySelector("#api_key_text_request_edit").type = 'text'
            e.target.innerHTML = "visibility"
        } else {
            document.querySelector("#api_key_text_request_edit").type = 'password'
            e.target.innerHTML = "visibility_off"
        }
        countEditKeyToText2++
    })

    document.querySelector("#password_credential_api_request_edit~i").addEventListener("click", e => {
        if (countEditPasswordToText2 > 1) {
            countEditPasswordToText2 = 0
        }
        if (countEditPasswordToText2 == 0) {
            document.querySelector("#password_credential_api_request_edit").type = 'text'
            e.target.innerHTML = "visibility"
        } else {
            document.querySelector("#password_credential_api_request_edit").type = 'password'
            e.target.innerHTML = "visibility_off"
        }
        countEditPasswordToText2++
    })
</script>