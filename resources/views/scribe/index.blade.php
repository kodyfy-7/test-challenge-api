<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var baseUrl = "http://localhost:3456";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-4.1.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-4.1.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image" />
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-1-authentication" class="tocify-header">
                <li class="tocify-item level-1" data-unique="1-authentication">
                    <a href="#1-authentication">1. Authentication</a>
                </li>
                                    <ul id="tocify-subheader-1-authentication" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="1-authentication-POSTapi-email-check">
                                <a href="#1-authentication-POSTapi-email-check">Check email availability.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="1-authentication-POSTapi-register">
                                <a href="#1-authentication-POSTapi-register">Register a user and dispatch token.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="1-authentication-POSTapi-v1-email-check">
                                <a href="#1-authentication-POSTapi-v1-email-check">Check email availability.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="1-authentication-POSTapi-v1-register">
                                <a href="#1-authentication-POSTapi-v1-register">Register a user and dispatch token.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="1-authentication-POSTapi-v1-login">
                                <a href="#1-authentication-POSTapi-v1-login">Authenticate a user and dispatch token.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="1-authentication-POSTapi-v1-logout">
                                <a href="#1-authentication-POSTapi-v1-logout">Logout a user and delete token.</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-2-profile" class="tocify-header">
                <li class="tocify-item level-1" data-unique="2-profile">
                    <a href="#2-profile">2. Profile</a>
                </li>
                                    <ul id="tocify-subheader-2-profile" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="2-profile-GETapi-profile">
                                <a href="#2-profile-GETapi-profile">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="2-profile-POSTapi-profile">
                                <a href="#2-profile-POSTapi-profile">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="2-profile-GETapi-profile--id-">
                                <a href="#2-profile-GETapi-profile--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="2-profile-PUTapi-profile--id-">
                                <a href="#2-profile-PUTapi-profile--id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="2-profile-DELETEapi-profile--id-">
                                <a href="#2-profile-DELETEapi-profile--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="2-profile-GETapi-v1-profile">
                                <a href="#2-profile-GETapi-v1-profile">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="2-profile-POSTapi-v1-profile">
                                <a href="#2-profile-POSTapi-v1-profile">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="2-profile-GETapi-v1-profile--id-">
                                <a href="#2-profile-GETapi-v1-profile--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="2-profile-PUTapi-v1-profile--id-">
                                <a href="#2-profile-PUTapi-v1-profile--id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="2-profile-DELETEapi-v1-profile--id-">
                                <a href="#2-profile-DELETEapi-v1-profile--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-user">
                                <a href="#endpoints-GETapi-user">GET api/user</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                            <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
                    </ul>
        <ul class="toc-footer" id="last-updated">
        <li>Last updated: October 26, 2022</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://localhost:3456</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>To authenticate requests, include an <strong><code>Authorization</code></strong> header with the value <strong><code>"Bearer {YOUR_AUTH_KEY}"</code></strong>.</p>
<p>All authenticated endpoints are marked with a <code>requires authentication</code> badge in the documentation below.</p>
<p>You can retrieve your token by visiting your dashboard and clicking <b>Generate API token</b>.</p>

        <h1 id="1-authentication">1. Authentication</h1>

    <p>APIs to manage authentication</p>

                                <h2 id="1-authentication-POSTapi-email-check">Check email availability.</h2>

<p>
</p>



<span id="example-requests-POSTapi-email-check">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:3456/api/email-check" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"fugit\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3456/api/email-check"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "fugit"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-email-check">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;success&quot;: &quot;Request was successful.&quot;,
    &quot;message&quot;: &quot;Email address is valid&quot;,
    &quot;data&quot;: null
}</code>
 </pre>
            <blockquote>
            <p>Example response (409):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;status&quot;: &quot;An error has occurred...&quot;,
    &quot;message&quot;: &quot;Email address already registered&quot;,
    &quot;data&quot;: null
}</code>
 </pre>
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;status&quot;: &quot;An error has occurred...&quot;,
    &quot;message&quot;: [
        &quot;The email field is required.&quot;
    ],
    &quot;data&quot;: null
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-email-check" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-email-check"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-email-check"></code></pre>
</span>
<span id="execution-error-POSTapi-email-check" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-email-check"></code></pre>
</span>
<form id="form-POSTapi-email-check" data-method="POST"
      data-path="api/email-check"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-email-check', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-email-check"
                    onclick="tryItOut('POSTapi-email-check');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-email-check"
                    onclick="cancelTryOut('POSTapi-email-check');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-email-check" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/email-check</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTapi-email-check"
               value="fugit"
               data-component="body" hidden>
    <br>
<p>Your email address.</p>
        </p>
        </form>

                    <h2 id="1-authentication-POSTapi-register">Register a user and dispatch token.</h2>

<p>
</p>



<span id="example-requests-POSTapi-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:3456/api/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"repudiandae\",
    \"name\": \"iusto\",
    \"children\": []
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3456/api/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "repudiandae",
    "name": "iusto",
    "children": []
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-register">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;success&quot;: &quot;Request was successful.&quot;,
    &quot;message&quot;: null,
    &quot;data&quot;: {
        &quot;user&quot;: {
            &quot;name&quot;: &quot;Harrison Jo&quot;,
            &quot;token&quot;: &quot;7|sjosUbQh2C9VQO4VWyINN58VRlT4fsbN1qoNE3bl&quot;
        }
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;error&quot;: [
        &quot;The email has already been taken.&quot;
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-register"></code></pre>
</span>
<span id="execution-error-POSTapi-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-register"></code></pre>
</span>
<form id="form-POSTapi-register" data-method="POST"
      data-path="api/register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-register"
                    onclick="tryItOut('POSTapi-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-register"
                    onclick="cancelTryOut('POSTapi-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-register" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/register</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTapi-register"
               value="repudiandae"
               data-component="body" hidden>
    <br>
<p>Your email address.</p>
        </p>
                <p>
            <b><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-register"
               value="iusto"
               data-component="body" hidden>
    <br>
<p>Your name address.</p>
        </p>
                <p>
            <b><code>children</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
                <input type="text"
               name="children"
               data-endpoint="POSTapi-register"
               value=""
               data-component="body" hidden>
    <br>
<p>Your children.</p>
        </p>
        </form>

                    <h2 id="1-authentication-POSTapi-v1-email-check">Check email availability.</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-email-check">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:3456/api/v1/email-check" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"exercitationem\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3456/api/v1/email-check"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "exercitationem"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-email-check">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;success&quot;: &quot;Request was successful.&quot;,
    &quot;message&quot;: &quot;Email address is valid&quot;,
    &quot;data&quot;: null
}</code>
 </pre>
            <blockquote>
            <p>Example response (409):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;status&quot;: &quot;An error has occurred...&quot;,
    &quot;message&quot;: &quot;Email address already registered&quot;,
    &quot;data&quot;: null
}</code>
 </pre>
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;status&quot;: &quot;An error has occurred...&quot;,
    &quot;message&quot;: [
        &quot;The email field is required.&quot;
    ],
    &quot;data&quot;: null
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-email-check" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-email-check"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-email-check"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-email-check" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-email-check"></code></pre>
</span>
<form id="form-POSTapi-v1-email-check" data-method="POST"
      data-path="api/v1/email-check"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-email-check', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-email-check"
                    onclick="tryItOut('POSTapi-v1-email-check');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-email-check"
                    onclick="cancelTryOut('POSTapi-v1-email-check');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-email-check" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/email-check</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTapi-v1-email-check"
               value="exercitationem"
               data-component="body" hidden>
    <br>
<p>Your email address.</p>
        </p>
        </form>

                    <h2 id="1-authentication-POSTapi-v1-register">Register a user and dispatch token.</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:3456/api/v1/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"maxime\",
    \"name\": \"magnam\",
    \"children\": []
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3456/api/v1/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "maxime",
    "name": "magnam",
    "children": []
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-register">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;success&quot;: &quot;Request was successful.&quot;,
    &quot;message&quot;: null,
    &quot;data&quot;: {
        &quot;user&quot;: {
            &quot;name&quot;: &quot;Harrison Jo&quot;,
            &quot;token&quot;: &quot;7|sjosUbQh2C9VQO4VWyINN58VRlT4fsbN1qoNE3bl&quot;
        }
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;error&quot;: [
        &quot;The email has already been taken.&quot;
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-register"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-register"></code></pre>
</span>
<form id="form-POSTapi-v1-register" data-method="POST"
      data-path="api/v1/register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-register"
                    onclick="tryItOut('POSTapi-v1-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-register"
                    onclick="cancelTryOut('POSTapi-v1-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-register" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/register</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTapi-v1-register"
               value="maxime"
               data-component="body" hidden>
    <br>
<p>Your email address.</p>
        </p>
                <p>
            <b><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-v1-register"
               value="magnam"
               data-component="body" hidden>
    <br>
<p>Your name address.</p>
        </p>
                <p>
            <b><code>children</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
                <input type="text"
               name="children"
               data-endpoint="POSTapi-v1-register"
               value=""
               data-component="body" hidden>
    <br>
<p>Your children.</p>
        </p>
        </form>

                    <h2 id="1-authentication-POSTapi-v1-login">Authenticate a user and dispatch token.</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:3456/api/v1/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"tempora\",
    \"password\": \"omnis\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3456/api/v1/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "tempora",
    "password": "omnis"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-login">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;success&quot;: &quot;Request was successful.&quot;,
    &quot;message&quot;: null,
    &quot;data&quot;: {
        &quot;user&quot;: {
            &quot;name&quot;: &quot;Harrison Jo&quot;,
            &quot;token&quot;: &quot;7|sjosUbQh2C9VQO4VWyINN58VRlT4fsbN1qoNE3bl&quot;
        }
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;The email field is required.&quot;,
    &quot;errors&quot;: {
        &quot;email&quot;: [
            &quot;The email field is required.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;status&quot;: &quot;An error has occurred...&quot;,
    &quot;message&quot;: &quot;Credentials do not match&quot;,
    &quot;data&quot;: &quot;&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-login"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-login"></code></pre>
</span>
<form id="form-POSTapi-v1-login" data-method="POST"
      data-path="api/v1/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-login"
                    onclick="tryItOut('POSTapi-v1-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-login"
                    onclick="cancelTryOut('POSTapi-v1-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-login" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/login</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTapi-v1-login"
               value="tempora"
               data-component="body" hidden>
    <br>
<p>Your email address.</p>
        </p>
                <p>
            <b><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="password"
               data-endpoint="POSTapi-v1-login"
               value="omnis"
               data-component="body" hidden>
    <br>
<p>Your password.</p>
        </p>
        </form>

                    <h2 id="1-authentication-POSTapi-v1-logout">Logout a user and delete token.</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-logout">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:3456/api/v1/logout" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3456/api/v1/logout"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-logout">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;success&quot;: &quot;Request was successful.&quot;,
    &quot;message&quot;: &quot;You have succesfully been logged out and your token has been removed&quot;,
    &quot;data&quot;: null
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-logout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-logout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-logout"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-logout"></code></pre>
</span>
<form id="form-POSTapi-v1-logout" data-method="POST"
      data-path="api/v1/logout"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-logout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-logout"
                    onclick="tryItOut('POSTapi-v1-logout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-logout"
                    onclick="cancelTryOut('POSTapi-v1-logout');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-logout" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/logout</code></b>
        </p>
                    </form>

                <h1 id="2-profile">2. Profile</h1>

    <p>APIs to manage profile resource</p>

                                <h2 id="2-profile-GETapi-profile">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-profile">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:3456/api/profile" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3456/api/profile"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-profile">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-profile" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-profile"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-profile"></code></pre>
</span>
<span id="execution-error-GETapi-profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-profile"></code></pre>
</span>
<form id="form-GETapi-profile" data-method="GET"
      data-path="api/profile"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-profile', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-profile"
                    onclick="tryItOut('GETapi-profile');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-profile"
                    onclick="cancelTryOut('GETapi-profile');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-profile" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/profile</code></b>
        </p>
                    </form>

                    <h2 id="2-profile-POSTapi-profile">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-profile">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:3456/api/profile" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3456/api/profile"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-profile">
</span>
<span id="execution-results-POSTapi-profile" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-profile"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-profile"></code></pre>
</span>
<span id="execution-error-POSTapi-profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-profile"></code></pre>
</span>
<form id="form-POSTapi-profile" data-method="POST"
      data-path="api/profile"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-profile', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-profile"
                    onclick="tryItOut('POSTapi-profile');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-profile"
                    onclick="cancelTryOut('POSTapi-profile');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-profile" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/profile</code></b>
        </p>
                    </form>

                    <h2 id="2-profile-GETapi-profile--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-profile--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:3456/api/profile/dolorem" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3456/api/profile/dolorem"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-profile--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-profile--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-profile--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-profile--id-"></code></pre>
</span>
<span id="execution-error-GETapi-profile--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-profile--id-"></code></pre>
</span>
<form id="form-GETapi-profile--id-" data-method="GET"
      data-path="api/profile/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-profile--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-profile--id-"
                    onclick="tryItOut('GETapi-profile--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-profile--id-"
                    onclick="cancelTryOut('GETapi-profile--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-profile--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/profile/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="id"
               data-endpoint="GETapi-profile--id-"
               value="dolorem"
               data-component="url" hidden>
    <br>
<p>The ID of the profile.</p>
            </p>
                    </form>

                    <h2 id="2-profile-PUTapi-profile--id-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-profile--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:3456/api/profile/quam" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3456/api/profile/quam"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-profile--id-">
</span>
<span id="execution-results-PUTapi-profile--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-profile--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-profile--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-profile--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-profile--id-"></code></pre>
</span>
<form id="form-PUTapi-profile--id-" data-method="PUT"
      data-path="api/profile/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-profile--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-profile--id-"
                    onclick="tryItOut('PUTapi-profile--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-profile--id-"
                    onclick="cancelTryOut('PUTapi-profile--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-profile--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/profile/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/profile/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="id"
               data-endpoint="PUTapi-profile--id-"
               value="quam"
               data-component="url" hidden>
    <br>
<p>The ID of the profile.</p>
            </p>
                    </form>

                    <h2 id="2-profile-DELETEapi-profile--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-profile--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:3456/api/profile/assumenda" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3456/api/profile/assumenda"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-profile--id-">
</span>
<span id="execution-results-DELETEapi-profile--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-profile--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-profile--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-profile--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-profile--id-"></code></pre>
</span>
<form id="form-DELETEapi-profile--id-" data-method="DELETE"
      data-path="api/profile/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-profile--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-profile--id-"
                    onclick="tryItOut('DELETEapi-profile--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-profile--id-"
                    onclick="cancelTryOut('DELETEapi-profile--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-profile--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/profile/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="id"
               data-endpoint="DELETEapi-profile--id-"
               value="assumenda"
               data-component="url" hidden>
    <br>
<p>The ID of the profile.</p>
            </p>
                    </form>

                    <h2 id="2-profile-GETapi-v1-profile">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-profile">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:3456/api/v1/profile" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3456/api/v1/profile"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-profile">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-profile" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-profile"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-profile"></code></pre>
</span>
<span id="execution-error-GETapi-v1-profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-profile"></code></pre>
</span>
<form id="form-GETapi-v1-profile" data-method="GET"
      data-path="api/v1/profile"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-profile', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-profile"
                    onclick="tryItOut('GETapi-v1-profile');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-profile"
                    onclick="cancelTryOut('GETapi-v1-profile');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-profile" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/profile</code></b>
        </p>
                    </form>

                    <h2 id="2-profile-POSTapi-v1-profile">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-profile">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:3456/api/v1/profile" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3456/api/v1/profile"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-profile">
</span>
<span id="execution-results-POSTapi-v1-profile" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-profile"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-profile"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-profile"></code></pre>
</span>
<form id="form-POSTapi-v1-profile" data-method="POST"
      data-path="api/v1/profile"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-profile', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-profile"
                    onclick="tryItOut('POSTapi-v1-profile');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-profile"
                    onclick="cancelTryOut('POSTapi-v1-profile');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-profile" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/profile</code></b>
        </p>
                    </form>

                    <h2 id="2-profile-GETapi-v1-profile--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-profile--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:3456/api/v1/profile/minus" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3456/api/v1/profile/minus"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-profile--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-profile--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-profile--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-profile--id-"></code></pre>
</span>
<span id="execution-error-GETapi-v1-profile--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-profile--id-"></code></pre>
</span>
<form id="form-GETapi-v1-profile--id-" data-method="GET"
      data-path="api/v1/profile/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-profile--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-profile--id-"
                    onclick="tryItOut('GETapi-v1-profile--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-profile--id-"
                    onclick="cancelTryOut('GETapi-v1-profile--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-profile--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/profile/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="id"
               data-endpoint="GETapi-v1-profile--id-"
               value="minus"
               data-component="url" hidden>
    <br>
<p>The ID of the profile.</p>
            </p>
                    </form>

                    <h2 id="2-profile-PUTapi-v1-profile--id-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-v1-profile--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:3456/api/v1/profile/quia" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3456/api/v1/profile/quia"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-profile--id-">
</span>
<span id="execution-results-PUTapi-v1-profile--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-profile--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-profile--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-profile--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-profile--id-"></code></pre>
</span>
<form id="form-PUTapi-v1-profile--id-" data-method="PUT"
      data-path="api/v1/profile/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-profile--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-profile--id-"
                    onclick="tryItOut('PUTapi-v1-profile--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-profile--id-"
                    onclick="cancelTryOut('PUTapi-v1-profile--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-profile--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/profile/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/profile/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="id"
               data-endpoint="PUTapi-v1-profile--id-"
               value="quia"
               data-component="url" hidden>
    <br>
<p>The ID of the profile.</p>
            </p>
                    </form>

                    <h2 id="2-profile-DELETEapi-v1-profile--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-v1-profile--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:3456/api/v1/profile/et" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3456/api/v1/profile/et"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-profile--id-">
</span>
<span id="execution-results-DELETEapi-v1-profile--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-profile--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-profile--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-profile--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-profile--id-"></code></pre>
</span>
<form id="form-DELETEapi-v1-profile--id-" data-method="DELETE"
      data-path="api/v1/profile/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-profile--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-profile--id-"
                    onclick="tryItOut('DELETEapi-v1-profile--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-profile--id-"
                    onclick="cancelTryOut('DELETEapi-v1-profile--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-profile--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/profile/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="id"
               data-endpoint="DELETEapi-v1-profile--id-"
               value="et"
               data-component="url" hidden>
    <br>
<p>The ID of the profile.</p>
            </p>
                    </form>

                <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-user">GET api/user</h2>

<p>
</p>



<span id="example-requests-GETapi-user">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:3456/api/user" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3456/api/user"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-user">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"></code></pre>
</span>
<span id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user"></code></pre>
</span>
<form id="form-GETapi-user" data-method="GET"
      data-path="api/user"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-user"
                    onclick="tryItOut('GETapi-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-user"
                    onclick="cancelTryOut('GETapi-user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-user" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/user</code></b>
        </p>
                    </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
