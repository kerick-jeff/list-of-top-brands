<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>ListOfTopBrands API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost:8000";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.2.1.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.2.1.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
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
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-portal-brands">
                                <a href="#endpoints-GETapi-v1-portal-brands">Return a paginated list of brands for the portal.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-portal-brands--id--fetch-by-id">
                                <a href="#endpoints-GETapi-v1-portal-brands--id--fetch-by-id">Fetch a single brand by its ID.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-portal-brands-store">
                                <a href="#endpoints-POSTapi-v1-portal-brands-store">Create a new brand.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-v1-portal-brands--id--update">
                                <a href="#endpoints-PUTapi-v1-portal-brands--id--update">Update an existing brand.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-v1-portal-brands--id--delete">
                                <a href="#endpoints-DELETEapi-v1-portal-brands--id--delete">Delete a brand.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-v1-portal-brands-delete-many">
                                <a href="#endpoints-DELETEapi-v1-portal-brands-delete-many">DELETE api/v1/portal/brands/delete-many</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-web-brands">
                                <a href="#endpoints-GETapi-v1-web-brands">Return a paginated list of brands for the website.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-web-brands--id--fetch-by-slug">
                                <a href="#endpoints-GETapi-v1-web-brands--id--fetch-by-slug">Fetch a single brand by its slug.</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: May 2, 2025</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost:8000</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-v1-portal-brands">Return a paginated list of brands for the portal.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-portal-brands">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/portal/brands" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/portal/brands"
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

<span id="example-responses-GETapi-v1-portal-brands">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
access-control-expose-headers: country
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;The brands were successfully.&quot;,
    &quot;data&quot;: {
        &quot;current_page&quot;: 1,
        &quot;data&quot;: [
            {
                &quot;id&quot;: 4,
                &quot;name&quot;: &quot;Brand D&quot;,
                &quot;country&quot;: null,
                &quot;caption&quot;: &quot;Brand D Caption&quot;,
                &quot;description&quot;: &quot;Brand D Description&quot;,
                &quot;website&quot;: &quot;https://example.com/brand-d&quot;,
                &quot;slug&quot;: &quot;brand-d&quot;,
                &quot;rating&quot;: 4.8,
                &quot;default&quot;: true,
                &quot;image&quot;: null,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;image_url&quot;: null
            },
            {
                &quot;id&quot;: 8,
                &quot;name&quot;: &quot;Brand H&quot;,
                &quot;country&quot;: null,
                &quot;caption&quot;: &quot;Brand H Caption&quot;,
                &quot;description&quot;: &quot;Brand H Description&quot;,
                &quot;website&quot;: &quot;https://example.com/brand-h&quot;,
                &quot;slug&quot;: &quot;brand-h&quot;,
                &quot;rating&quot;: 4.7,
                &quot;default&quot;: true,
                &quot;image&quot;: null,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;image_url&quot;: null
            },
            {
                &quot;id&quot;: 10,
                &quot;name&quot;: &quot;Brand J&quot;,
                &quot;country&quot;: null,
                &quot;caption&quot;: &quot;Brand J Caption&quot;,
                &quot;description&quot;: &quot;Brand J Description&quot;,
                &quot;website&quot;: &quot;https://example.com/brand-j&quot;,
                &quot;slug&quot;: &quot;brand-j&quot;,
                &quot;rating&quot;: 4.6,
                &quot;default&quot;: true,
                &quot;image&quot;: null,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;image_url&quot;: null
            },
            {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Brand A&quot;,
                &quot;country&quot;: &quot;US&quot;,
                &quot;caption&quot;: &quot;Brand A Caption&quot;,
                &quot;description&quot;: &quot;Brand A Description&quot;,
                &quot;website&quot;: &quot;https://example.com/brand-a&quot;,
                &quot;slug&quot;: &quot;brand-a&quot;,
                &quot;rating&quot;: 4.5,
                &quot;default&quot;: false,
                &quot;image&quot;: null,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;image_url&quot;: null
            },
            {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;Brand E&quot;,
                &quot;country&quot;: &quot;GB&quot;,
                &quot;caption&quot;: &quot;Brand E Caption&quot;,
                &quot;description&quot;: &quot;Brand E Description&quot;,
                &quot;website&quot;: &quot;https://example.com/brand-e&quot;,
                &quot;slug&quot;: &quot;brand-e&quot;,
                &quot;rating&quot;: 4.2,
                &quot;default&quot;: false,
                &quot;image&quot;: &quot;CM&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;image_url&quot;: &quot;http://localhost:8000/storage/CM&quot;
            },
            {
                &quot;id&quot;: 7,
                &quot;name&quot;: &quot;Brand G&quot;,
                &quot;country&quot;: &quot;AU&quot;,
                &quot;caption&quot;: &quot;Brand G Caption&quot;,
                &quot;description&quot;: &quot;Brand G Description&quot;,
                &quot;website&quot;: &quot;https://example.com/brand-g&quot;,
                &quot;slug&quot;: &quot;brand-g&quot;,
                &quot;rating&quot;: 4.1,
                &quot;default&quot;: false,
                &quot;image&quot;: null,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;image_url&quot;: null
            },
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Brand B&quot;,
                &quot;country&quot;: &quot;CM&quot;,
                &quot;caption&quot;: &quot;Brand B Caption&quot;,
                &quot;description&quot;: &quot;Brand B Description&quot;,
                &quot;website&quot;: &quot;https://example.com/brand-b&quot;,
                &quot;slug&quot;: &quot;brand-b&quot;,
                &quot;rating&quot;: 4,
                &quot;default&quot;: true,
                &quot;image&quot;: null,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;image_url&quot;: null
            },
            {
                &quot;id&quot;: 6,
                &quot;name&quot;: &quot;Brand F&quot;,
                &quot;country&quot;: null,
                &quot;caption&quot;: &quot;Brand F Caption&quot;,
                &quot;description&quot;: &quot;Brand F Description&quot;,
                &quot;website&quot;: &quot;https://example.com/brand-f&quot;,
                &quot;slug&quot;: &quot;brand-f&quot;,
                &quot;rating&quot;: 3.9,
                &quot;default&quot;: true,
                &quot;image&quot;: null,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;image_url&quot;: null
            },
            {
                &quot;id&quot;: 9,
                &quot;name&quot;: &quot;Brand I&quot;,
                &quot;country&quot;: &quot;FR&quot;,
                &quot;caption&quot;: &quot;Brand I Caption&quot;,
                &quot;description&quot;: &quot;Brand I Description&quot;,
                &quot;website&quot;: &quot;https://example.com/brand-i&quot;,
                &quot;slug&quot;: &quot;brand-i&quot;,
                &quot;rating&quot;: 3.8,
                &quot;default&quot;: false,
                &quot;image&quot;: null,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;image_url&quot;: null
            },
            {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;Brand C&quot;,
                &quot;country&quot;: &quot;CA&quot;,
                &quot;caption&quot;: &quot;Brand C Caption&quot;,
                &quot;description&quot;: &quot;Brand C Description&quot;,
                &quot;website&quot;: &quot;https://example.com/brand-c&quot;,
                &quot;slug&quot;: &quot;brand-c&quot;,
                &quot;rating&quot;: 3.5,
                &quot;default&quot;: false,
                &quot;image&quot;: null,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;image_url&quot;: null
            }
        ],
        &quot;first_page_url&quot;: &quot;http://localhost:8000/api/v1/portal/brands?page=1&quot;,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;last_page_url&quot;: &quot;http://localhost:8000/api/v1/portal/brands?page=1&quot;,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/v1/portal/brands?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;next_page_url&quot;: null,
        &quot;path&quot;: &quot;http://localhost:8000/api/v1/portal/brands&quot;,
        &quot;per_page&quot;: 10,
        &quot;prev_page_url&quot;: null,
        &quot;to&quot;: 10,
        &quot;total&quot;: 10
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-portal-brands" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-portal-brands"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-portal-brands"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-portal-brands" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-portal-brands">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-portal-brands" data-method="GET"
      data-path="api/v1/portal/brands"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-portal-brands', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-portal-brands"
                    onclick="tryItOut('GETapi-v1-portal-brands');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-portal-brands"
                    onclick="cancelTryOut('GETapi-v1-portal-brands');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-portal-brands"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/portal/brands</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-portal-brands"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-portal-brands"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-portal-brands--id--fetch-by-id">Fetch a single brand by its ID.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-portal-brands--id--fetch-by-id">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/portal/brands/1/fetch-by-id" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/portal/brands/1/fetch-by-id"
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

<span id="example-responses-GETapi-v1-portal-brands--id--fetch-by-id">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
access-control-expose-headers: country
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;The brand was successfully retrieved.&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Brand A&quot;,
        &quot;country&quot;: &quot;US&quot;,
        &quot;caption&quot;: &quot;Brand A Caption&quot;,
        &quot;description&quot;: &quot;Brand A Description&quot;,
        &quot;website&quot;: &quot;https://example.com/brand-a&quot;,
        &quot;slug&quot;: &quot;brand-a&quot;,
        &quot;rating&quot;: 4.5,
        &quot;default&quot;: false,
        &quot;image&quot;: null,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;image_url&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-portal-brands--id--fetch-by-id" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-portal-brands--id--fetch-by-id"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-portal-brands--id--fetch-by-id"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-portal-brands--id--fetch-by-id" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-portal-brands--id--fetch-by-id">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-portal-brands--id--fetch-by-id" data-method="GET"
      data-path="api/v1/portal/brands/{id}/fetch-by-id"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-portal-brands--id--fetch-by-id', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-portal-brands--id--fetch-by-id"
                    onclick="tryItOut('GETapi-v1-portal-brands--id--fetch-by-id');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-portal-brands--id--fetch-by-id"
                    onclick="cancelTryOut('GETapi-v1-portal-brands--id--fetch-by-id');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-portal-brands--id--fetch-by-id"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/portal/brands/{id}/fetch-by-id</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-portal-brands--id--fetch-by-id"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-portal-brands--id--fetch-by-id"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-v1-portal-brands--id--fetch-by-id"
               value="1"
               data-component="url">
    <br>
<p>The ID of the brand. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-v1-portal-brands-store">Create a new brand.</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-portal-brands-store">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/portal/brands/store" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"country\": \"ng\",
    \"caption\": \"z\",
    \"description\": \"Eius et animi quos velit et.\",
    \"website\": \"http:\\/\\/www.ernser.org\\/harum-mollitia-modi-deserunt-aut-ab-provident-perspiciatis-quo.html\",
    \"slug\": \"m\",
    \"rating\": 3,
    \"default\": true,
    \"image\": \"data:image\\/png;base64,\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/portal/brands/store"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b",
    "country": "ng",
    "caption": "z",
    "description": "Eius et animi quos velit et.",
    "website": "http:\/\/www.ernser.org\/harum-mollitia-modi-deserunt-aut-ab-provident-perspiciatis-quo.html",
    "slug": "m",
    "rating": 3,
    "default": true,
    "image": "data:image\/png;base64,"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-portal-brands-store">
</span>
<span id="execution-results-POSTapi-v1-portal-brands-store" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-portal-brands-store"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-portal-brands-store"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-portal-brands-store" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-portal-brands-store">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-portal-brands-store" data-method="POST"
      data-path="api/v1/portal/brands/store"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-portal-brands-store', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-portal-brands-store"
                    onclick="tryItOut('POSTapi-v1-portal-brands-store');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-portal-brands-store"
                    onclick="cancelTryOut('POSTapi-v1-portal-brands-store');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-portal-brands-store"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/portal/brands/store</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-portal-brands-store"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-portal-brands-store"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-v1-portal-brands-store"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>country</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="country"                data-endpoint="POSTapi-v1-portal-brands-store"
               value="ng"
               data-component="body">
    <br>
<p>Must not be greater than 2 characters. Example: <code>ng</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>caption</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="caption"                data-endpoint="POSTapi-v1-portal-brands-store"
               value="z"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>z</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-v1-portal-brands-store"
               value="Eius et animi quos velit et."
               data-component="body">
    <br>
<p>Example: <code>Eius et animi quos velit et.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>website</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="website"                data-endpoint="POSTapi-v1-portal-brands-store"
               value="http://www.ernser.org/harum-mollitia-modi-deserunt-aut-ab-provident-perspiciatis-quo.html"
               data-component="body">
    <br>
<p>Must be a valid URL. Example: <code>http://www.ernser.org/harum-mollitia-modi-deserunt-aut-ab-provident-perspiciatis-quo.html</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>slug</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="slug"                data-endpoint="POSTapi-v1-portal-brands-store"
               value="m"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>m</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>rating</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="rating"                data-endpoint="POSTapi-v1-portal-brands-store"
               value="3"
               data-component="body">
    <br>
<p>Must be at least 0. Must not be greater than 5. Example: <code>3</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>default</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="POSTapi-v1-portal-brands-store" style="display: none">
            <input type="radio" name="default"
                   value="true"
                   data-endpoint="POSTapi-v1-portal-brands-store"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-v1-portal-brands-store" style="display: none">
            <input type="radio" name="default"
                   value="false"
                   data-endpoint="POSTapi-v1-portal-brands-store"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>image</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="image"                data-endpoint="POSTapi-v1-portal-brands-store"
               value="data:image/png;base64,"
               data-component="body">
    <br>
<p>Must match the regex /^data:image\/(jpeg|png|jpg|gif|webp);base64,/. Example: <code>data:image/png;base64,</code></p>
        </div>
        </form>

                    <h2 id="endpoints-PUTapi-v1-portal-brands--id--update">Update an existing brand.</h2>

<p>
</p>



<span id="example-requests-PUTapi-v1-portal-brands--id--update">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/v1/portal/brands/1/update" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"country\": \"ng\",
    \"caption\": \"z\",
    \"description\": \"Eius et animi quos velit et.\",
    \"website\": \"http:\\/\\/www.ernser.org\\/harum-mollitia-modi-deserunt-aut-ab-provident-perspiciatis-quo.html\",
    \"slug\": \"m\",
    \"rating\": 3,
    \"default\": false,
    \"image\": \"data:image\\/png;base64,\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/portal/brands/1/update"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b",
    "country": "ng",
    "caption": "z",
    "description": "Eius et animi quos velit et.",
    "website": "http:\/\/www.ernser.org\/harum-mollitia-modi-deserunt-aut-ab-provident-perspiciatis-quo.html",
    "slug": "m",
    "rating": 3,
    "default": false,
    "image": "data:image\/png;base64,"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-portal-brands--id--update">
</span>
<span id="execution-results-PUTapi-v1-portal-brands--id--update" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-portal-brands--id--update"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-portal-brands--id--update"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-portal-brands--id--update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-portal-brands--id--update">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-portal-brands--id--update" data-method="PUT"
      data-path="api/v1/portal/brands/{id}/update"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-portal-brands--id--update', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-portal-brands--id--update"
                    onclick="tryItOut('PUTapi-v1-portal-brands--id--update');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-portal-brands--id--update"
                    onclick="cancelTryOut('PUTapi-v1-portal-brands--id--update');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-portal-brands--id--update"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/portal/brands/{id}/update</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-portal-brands--id--update"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-portal-brands--id--update"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-v1-portal-brands--id--update"
               value="1"
               data-component="url">
    <br>
<p>The ID of the brand. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-v1-portal-brands--id--update"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>country</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="country"                data-endpoint="PUTapi-v1-portal-brands--id--update"
               value="ng"
               data-component="body">
    <br>
<p>Must not be greater than 2 characters. Example: <code>ng</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>caption</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="caption"                data-endpoint="PUTapi-v1-portal-brands--id--update"
               value="z"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>z</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTapi-v1-portal-brands--id--update"
               value="Eius et animi quos velit et."
               data-component="body">
    <br>
<p>Example: <code>Eius et animi quos velit et.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>website</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="website"                data-endpoint="PUTapi-v1-portal-brands--id--update"
               value="http://www.ernser.org/harum-mollitia-modi-deserunt-aut-ab-provident-perspiciatis-quo.html"
               data-component="body">
    <br>
<p>Must be a valid URL. Example: <code>http://www.ernser.org/harum-mollitia-modi-deserunt-aut-ab-provident-perspiciatis-quo.html</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>slug</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="slug"                data-endpoint="PUTapi-v1-portal-brands--id--update"
               value="m"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>m</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>rating</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="rating"                data-endpoint="PUTapi-v1-portal-brands--id--update"
               value="3"
               data-component="body">
    <br>
<p>Must be at least 0. Must not be greater than 5. Example: <code>3</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>default</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="PUTapi-v1-portal-brands--id--update" style="display: none">
            <input type="radio" name="default"
                   value="true"
                   data-endpoint="PUTapi-v1-portal-brands--id--update"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-v1-portal-brands--id--update" style="display: none">
            <input type="radio" name="default"
                   value="false"
                   data-endpoint="PUTapi-v1-portal-brands--id--update"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>image</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="image"                data-endpoint="PUTapi-v1-portal-brands--id--update"
               value="data:image/png;base64,"
               data-component="body">
    <br>
<p>Must match the regex /^data:image\/(jpeg|png|jpg|gif|webp);base64,/. Example: <code>data:image/png;base64,</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-v1-portal-brands--id--delete">Delete a brand.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-v1-portal-brands--id--delete">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/v1/portal/brands/1/delete" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/portal/brands/1/delete"
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

<span id="example-responses-DELETEapi-v1-portal-brands--id--delete">
</span>
<span id="execution-results-DELETEapi-v1-portal-brands--id--delete" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-portal-brands--id--delete"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-portal-brands--id--delete"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-portal-brands--id--delete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-portal-brands--id--delete">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-portal-brands--id--delete" data-method="DELETE"
      data-path="api/v1/portal/brands/{id}/delete"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-portal-brands--id--delete', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-portal-brands--id--delete"
                    onclick="tryItOut('DELETEapi-v1-portal-brands--id--delete');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-portal-brands--id--delete"
                    onclick="cancelTryOut('DELETEapi-v1-portal-brands--id--delete');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-portal-brands--id--delete"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/portal/brands/{id}/delete</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-portal-brands--id--delete"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-portal-brands--id--delete"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-v1-portal-brands--id--delete"
               value="1"
               data-component="url">
    <br>
<p>The ID of the brand. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-DELETEapi-v1-portal-brands-delete-many">DELETE api/v1/portal/brands/delete-many</h2>

<p>
</p>



<span id="example-requests-DELETEapi-v1-portal-brands-delete-many">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/v1/portal/brands/delete-many" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/portal/brands/delete-many"
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

<span id="example-responses-DELETEapi-v1-portal-brands-delete-many">
</span>
<span id="execution-results-DELETEapi-v1-portal-brands-delete-many" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-portal-brands-delete-many"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-portal-brands-delete-many"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-portal-brands-delete-many" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-portal-brands-delete-many">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-portal-brands-delete-many" data-method="DELETE"
      data-path="api/v1/portal/brands/delete-many"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-portal-brands-delete-many', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-portal-brands-delete-many"
                    onclick="tryItOut('DELETEapi-v1-portal-brands-delete-many');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-portal-brands-delete-many"
                    onclick="cancelTryOut('DELETEapi-v1-portal-brands-delete-many');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-portal-brands-delete-many"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/portal/brands/delete-many</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-portal-brands-delete-many"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-portal-brands-delete-many"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-web-brands">Return a paginated list of brands for the website.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-web-brands">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/web/brands" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/web/brands"
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

<span id="example-responses-GETapi-v1-web-brands">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
country: 
access-control-allow-origin: *
access-control-expose-headers: country
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;The brands were successfully retrieved.&quot;,
    &quot;data&quot;: {
        &quot;current_page&quot;: 1,
        &quot;data&quot;: [
            {
                &quot;id&quot;: 4,
                &quot;name&quot;: &quot;Brand D&quot;,
                &quot;country&quot;: null,
                &quot;caption&quot;: &quot;Brand D Caption&quot;,
                &quot;description&quot;: &quot;Brand D Description&quot;,
                &quot;website&quot;: &quot;https://example.com/brand-d&quot;,
                &quot;slug&quot;: &quot;brand-d&quot;,
                &quot;rating&quot;: 4.8,
                &quot;default&quot;: true,
                &quot;image&quot;: null,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;image_url&quot;: null
            },
            {
                &quot;id&quot;: 8,
                &quot;name&quot;: &quot;Brand H&quot;,
                &quot;country&quot;: null,
                &quot;caption&quot;: &quot;Brand H Caption&quot;,
                &quot;description&quot;: &quot;Brand H Description&quot;,
                &quot;website&quot;: &quot;https://example.com/brand-h&quot;,
                &quot;slug&quot;: &quot;brand-h&quot;,
                &quot;rating&quot;: 4.7,
                &quot;default&quot;: true,
                &quot;image&quot;: null,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;image_url&quot;: null
            },
            {
                &quot;id&quot;: 10,
                &quot;name&quot;: &quot;Brand J&quot;,
                &quot;country&quot;: null,
                &quot;caption&quot;: &quot;Brand J Caption&quot;,
                &quot;description&quot;: &quot;Brand J Description&quot;,
                &quot;website&quot;: &quot;https://example.com/brand-j&quot;,
                &quot;slug&quot;: &quot;brand-j&quot;,
                &quot;rating&quot;: 4.6,
                &quot;default&quot;: true,
                &quot;image&quot;: null,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;image_url&quot;: null
            },
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Brand B&quot;,
                &quot;country&quot;: &quot;CM&quot;,
                &quot;caption&quot;: &quot;Brand B Caption&quot;,
                &quot;description&quot;: &quot;Brand B Description&quot;,
                &quot;website&quot;: &quot;https://example.com/brand-b&quot;,
                &quot;slug&quot;: &quot;brand-b&quot;,
                &quot;rating&quot;: 4,
                &quot;default&quot;: true,
                &quot;image&quot;: null,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;image_url&quot;: null
            },
            {
                &quot;id&quot;: 6,
                &quot;name&quot;: &quot;Brand F&quot;,
                &quot;country&quot;: null,
                &quot;caption&quot;: &quot;Brand F Caption&quot;,
                &quot;description&quot;: &quot;Brand F Description&quot;,
                &quot;website&quot;: &quot;https://example.com/brand-f&quot;,
                &quot;slug&quot;: &quot;brand-f&quot;,
                &quot;rating&quot;: 3.9,
                &quot;default&quot;: true,
                &quot;image&quot;: null,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;image_url&quot;: null
            }
        ],
        &quot;first_page_url&quot;: &quot;http://localhost:8000/api/v1/web/brands?page=1&quot;,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;last_page_url&quot;: &quot;http://localhost:8000/api/v1/web/brands?page=1&quot;,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/v1/web/brands?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;next_page_url&quot;: null,
        &quot;path&quot;: &quot;http://localhost:8000/api/v1/web/brands&quot;,
        &quot;per_page&quot;: 20,
        &quot;prev_page_url&quot;: null,
        &quot;to&quot;: 5,
        &quot;total&quot;: 5
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-web-brands" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-web-brands"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-web-brands"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-web-brands" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-web-brands">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-web-brands" data-method="GET"
      data-path="api/v1/web/brands"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-web-brands', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-web-brands"
                    onclick="tryItOut('GETapi-v1-web-brands');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-web-brands"
                    onclick="cancelTryOut('GETapi-v1-web-brands');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-web-brands"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/web/brands</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-web-brands"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-web-brands"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-web-brands--id--fetch-by-slug">Fetch a single brand by its slug.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-web-brands--id--fetch-by-slug">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/web/brands/1/fetch-by-slug" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/web/brands/1/fetch-by-slug"
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

<span id="example-responses-GETapi-v1-web-brands--id--fetch-by-slug">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
access-control-expose-headers: country
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: false,
    &quot;message&quot;: &quot;The brand was not found.&quot;,
    &quot;error&quot;: &quot;No query results for model [App\\Models\\Brand].&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-web-brands--id--fetch-by-slug" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-web-brands--id--fetch-by-slug"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-web-brands--id--fetch-by-slug"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-web-brands--id--fetch-by-slug" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-web-brands--id--fetch-by-slug">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-web-brands--id--fetch-by-slug" data-method="GET"
      data-path="api/v1/web/brands/{id}/fetch-by-slug"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-web-brands--id--fetch-by-slug', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-web-brands--id--fetch-by-slug"
                    onclick="tryItOut('GETapi-v1-web-brands--id--fetch-by-slug');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-web-brands--id--fetch-by-slug"
                    onclick="cancelTryOut('GETapi-v1-web-brands--id--fetch-by-slug');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-web-brands--id--fetch-by-slug"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/web/brands/{id}/fetch-by-slug</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-web-brands--id--fetch-by-slug"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-web-brands--id--fetch-by-slug"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-v1-web-brands--id--fetch-by-slug"
               value="1"
               data-component="url">
    <br>
<p>The ID of the brand. Example: <code>1</code></p>
            </div>
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
