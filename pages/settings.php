<?php
require_once dirname(__FILE__, 2) . '\const\const.php';



?>

<div>
    <div class="connection_api titles">
        <h1 class="connection_api settings title"><?php echo $NAME_APPLICATION_SETTINGS ?></h1>
        <p class="connection_api settings guide"><?php echo $GUIDE_SETTINGS ?></p>
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
                        <button onclick="editInfo(65465, 'prueba','https/localhost:5000', true, 10, 'dscampaz3110@gmail.com', 'daniel2008b', 'auth/login', true, '1321casc5efa11e51' )">Edit Info</button>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <div class="connection_api form container add">
        <div class="connection_api form add">
            <h1>Form To Add Api</h1>
            <form class="connection_api from init" action="" method="post">
                <div class="connection_api content">
                    <div>
                        <label for="name_api">Name API: </label>
                        <input type="text" name="name_api" id="name_api">
                    </div>
                    <div>
                        <label for="url_api_base">Base Url: </label>
                        <input type="text" name="url_api_base" id="url_api_base">
                        <label for="url_api_base">/</label>
                    </div>
                </div>
                <div class="connection_api content">
                    <div title="Your Api need Init Session?">
                        <label class="content-input" for="need_session">
                            <input type="checkbox" name="need_session" id="need_session"> Session?
                            <i></i>
                        </label>
                    </div>
                    <div title="How often should the token be refreshed?">
                        <label for="refresh_token">Refresh Token: </label>
                        <input type="number" name="refresh_token" id="refresh_token">
                        <label for="refresh_token">HRS</label>
                    </div>
                </div>
                <div class="connection_api content">
                    <div title="Email for access to API">
                        <label for="email_credential_api">Email: </label>
                        <input type="text" name="email_credential_api" id="email_credential_api">
                    </div>
                    <div title="Password for access to API" style="display: flex; align-items: center;">
                        <label for="password_credential_api">Password: </label>
                        <input type="password" name="password_credential_api" id="password_credential_api">
                        <i class="material-icons">remove_red_eye</i>
                    </div>
                </div>
                <div class="connection_api content">
                    <div title="Endpoint for the Session">
                        <label for="endpoint_session" class="endpoint_session">Endpoint Session:</label>
                        <input type="text" name="endpoint_session" id="endpoint_session">
                    </div>
                </div>
                <div class="connection_api content">
                    <div title="Your Api need Api Key?">
                        <label class="content-input" for="api_key">
                            <input type="checkbox" name="api_key" id="api_key" value="Api Key"> Api Key?
                            <i></i>
                        </label>
                    </div>
                    <div style="display: flex; align-items: center;">
                        <label for="api_key_text">Api Key: </label>
                        <input type="password" name="api_key_text" id="api_key_text">
                        <i class="material-icons">visibility_off</i>
                    </div>
                </div>
                <br>
                <input class="connection_api btn" type="submit" value="Save">
            </form>
        </div>
    </div>
    <div class="connection_api form container edit" style="display: none;">
        <div class="connection_api form add">
            <h1>Form To Edit Api</h1>
            <form class="connection_api from edit" action="" method="post">
                <input type="hidden" name="id_api_edit" id="id_api_edit">
                <div class="connection_api content">
                    <div>
                        <label for="name_api_edit">Name API: </label>
                        <input type="text" name="name_api_edit" id="name_api_edit">
                    </div>
                    <div>
                        <label for="url_api_base_edit">Base Url: </label>
                        <input type="text" name="url_api_base_edit" id="url_api_base_edit">
                        <label for="url_api_base_edit">/</label>
                    </div>
                </div>
                <div class="connection_api content">
                    <div title="Your Api need Init Session?">
                        <label class="content-input" for="need_session_edit">
                            <input type="checkbox" name="need_session_edit" id="need_session_edit"> Session?
                            <i></i>
                        </label>
                    </div>
                    <div title="How often should the token be refreshed?">
                        <label for="refresh_token_edit">Refresh Token: </label>
                        <input type="number" name="refresh_token_edit" id="refresh_token_edit">
                        <label for="refresh_token_edit">HRS</label>
                    </div>
                </div>
                <div class="connection_api content">
                    <div title="Email for access to API">
                        <label for="email_credential_api_edit">Email: </label>
                        <input type="text" name="email_credential_api_edit" id="email_credential_api_edit">
                    </div>
                    <div title="Password for access to API" style="display: flex; align-items: center;">
                        <label for="password_credential_api_edit">Password: </label>
                        <input type="password" name="password_credential_api_edit" id="password_credential_api_edit">
                        <i class="material-icons">visibility_off</i>
                    </div>
                </div>
                <div class="connection_api content">
                    <div title="Endpoint for the Session">
                        <label for="endpoint_session_edit" class="endpoint_session_edit">Endpoint Session:</label>
                        <input type="text" name="endpoint_session_edit" id="endpoint_session_edit">
                    </div>
                </div>
                <div class="connection_api content">
                    <div title="Your Api need Api Key?">
                        <label class="content-input" for="api_key_edit">
                            <input type="checkbox" name="api_key_edit" id="api_key_edit" value="Api Key_edit"> Api Key?
                            <i></i>
                        </label>
                    </div>
                    <div style="display: flex; align-items: center;">
                        <label for="api_key_text_edit">Api Key: </label>
                        <input type="password" name="api_key_text_edit" id="api_key_text_edit">
                        <i class="material-icons">remove_red_eye</i>
                    </div>
                </div>
                <br>
                <input class="connection_api btn" type="submit" value="Save">
            </form>
            <button onclick="backToAdd()" class="connection_api btn"><i class="material-icons">keyboard_backspace</i> Back to Add</button>
        </div>
    </div>
</div>

<script>
    const labelUrlSession = document.querySelector("label.endpoint_session")

    const objectHTMLSession = [document.querySelector("#refresh_token"), document.querySelector("#endpoint_session"), document.querySelector("#email_credential_api"), document.querySelector("#endpoint_session"), document.querySelector("#password_credential_api")]
    const objectHTMLApiKey = [document.querySelector("#api_key_text")]

    objectHTMLSession.forEach(i => {
        i.disabled = true
    })
    objectHTMLApiKey.forEach(i => {
        i.disabled = true
    })

    document.querySelector("#url_api_base").addEventListener("change", e => {
        labelUrlSession.innerHTML = document.querySelector("#url_api_base").value + "/"
    })

    let countSession = 0;
    let countApiKey = 0;

    document.querySelector("#need_session").addEventListener("change", e => {
        if (countSession > 1) {
            countSession = 0
        }
        if (countSession == 0) {
            objectHTMLSession.forEach(i => {
                i.disabled = false
            })
        } else {
            objectHTMLSession.forEach(i => {
                i.disabled = true
            })
        }
        countSession++
    })

    document.querySelector("#api_key").addEventListener("change", e => {
        if (countApiKey > 1) {
            countApiKey = 0
        }
        if (countApiKey == 0) {
            objectHTMLApiKey.forEach(i => {
                i.disabled = false
            })
        } else {
            objectHTMLApiKey.forEach(i => {
                i.disabled = true
            })
        }
        countApiKey++
    })

    function editInfo(id, nameapi, baseurl, session, tokentime, email, password, endpoint, apikey, apikeynum) {
        document.querySelector(".connection_api.form.container.add").style.display = "none"
        document.querySelector(".connection_api.form.container.edit").style.display = "block"
        let NameApi = document.querySelector("#name_api_edit")
        let BaseUrl = document.querySelector("#url_api_base_edit")
        let Session = document.querySelector("#need_session_edit")
        let TokenTime = document.querySelector("#refresh_token_edit")
        let ApiKey = document.querySelector("#api_key_edit")
        let ApiKeyNum = document.querySelector("#api_key_text_edit")
        let Email = document.querySelector("#email_credential_api_edit")
        let Password = document.querySelector("#password_credential_api_edit")
        let Id = document.querySelector("#id_api_edit")
        let EndpointSession = document.querySelector("input#endpoint_session_edit")

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

        document.querySelector("label.endpoint_session_edit").innerHTML = baseurl + "/"
    }

    function backToAdd() {
        document.querySelector(".connection_api.form.container.add").style.display = "block"
        document.querySelector(".connection_api.form.container.edit").style.display = "none"
    }
    let countEditKeyToText = 0
    let countEditPasswordToText = 0
    document.querySelector("#api_key_text_edit~i").addEventListener("click", e => {
        if (countEditKeyToText > 1) {
            countEditKeyToText = 0
        }
        if (countEditKeyToText == 0) {
            document.querySelector("#api_key_text_edit").type = 'text'
            e.target.innerHTML = "visibility"
        } else {
            document.querySelector("#api_key_text_edit").type = 'password'
            e.target.innerHTML = "visibility_off"
        }
        countEditKeyToText++
    })

    document.querySelector("#password_credential_api_edit~i").addEventListener("click", e => {
        if (countEditPasswordToText > 1) {
            countEditPasswordToText = 0
        }
        if (countEditPasswordToText == 0) {
            document.querySelector("#password_credential_api_edit").type = 'text'
            e.target.innerHTML = "visibility"
        } else {
            document.querySelector("#password_credential_api_edit").type = 'password'
            e.target.innerHTML = "visibility_off"
        }
        countEditPasswordToText++
    })
    
    /* Add */

    let countKeyToText = 0
    let countPasswordToText = 0
    document.querySelector("#api_key_text~i").addEventListener("click", e => {
        if (countKeyToText > 1) {
            countKeyToText = 0
        }
        if (countKeyToText == 0) {
            document.querySelector("#api_key_text").type = 'text'
            e.target.innerHTML = "visibility"
        } else {
            document.querySelector("#api_key_text").type = 'password'
            e.target.innerHTML = "visibility_off"
        }
        countKeyToText++
    })

    document.querySelector("#password_credential_api~i").addEventListener("click", e => {
        if (countPasswordToText > 1) {
            countPasswordToText = 0
        }
        if (countPasswordToText == 0) {
            document.querySelector("#password_credential_api").type = 'text'
            e.target.innerHTML = "visibility"
        } else {
            document.querySelector("#password_credential_api").type = 'password'
            e.target.innerHTML = "visibility_off"
        }
        countPasswordToText++
    })

</script>

<style>
    input ~ i.select {
        background-color: var(--color-secondary);
        color: white;
        padding: 0.8px;
        border-radius: 5px;
    }

    input ~ i:hover {
        cursor: pointer;
    }

    input ~ i {
        color: var(--color-secondary);
    }

    button.connection_api.btn{
        display: flex;
        align-items: center;
    }
</style>