<header class="mm header">

    <div class="row">
        <img class="logo" src="{{ url('ico/gi-logo.png') }}">

        <ul class="links-title">
            
            <li class="link-title" id="link-about" onmouseover="hvLink('about')" onmouseout="blLink('about')">
                    <img src="ico/gi-header-div.png">
                    <a>NOSOTROS</a>
            </li>
            <li class="link-title" id="link-business" onmouseover="hvLink('business')" onmouseout="blLink('business')">
                    <img src="ico/gi-header-div.png">
                    <a>LÍNEAS DE NEGOCIO</a>
            </li>
            <li class="link-title" id="link-industry" onmouseover="hvLink('industry')" onmouseout="blLink('industry')">
                    <img src="ico/gi-header-div.png">
                    <a>INFORMACIÓN DEL SECTOR</a>
            </li>
            <li class="link-title" id="link-clients" onmouseover="hvLink('clients')" onmouseout="blLink('clients')">
                    <img src="ico/gi-header-div.png">
                    <a>CLIENTES</a>
                </li>
            <li class="link-title" id="link-contact" onmouseover="hvLink('contact')" onmouseout="blLink('contact')">
                    <img src="ico/gi-header-div.png">
                    <a>CONTACTO</a>
        </li>

        </ul>
    </div>

    <div class="row last">
        <ul class="links-content">
            <li class="link-content" id="link-content-about" onmouseover="hvLink('about')" onmouseout="blLink('about')">
                <ul class="sublinks">
                    <li class="sublink"><a>sublink1</a></li>
                    <li class="sublink"><a>sublink2</a></li>
                    <li class="sublink"><a>sublink3</a></li>
                </ul>
            </li>
             <li class="link-content" id="link-content-business">
                <ul class="sublinks">
                    <li class="sublink"><a>sublink1</a></li>
                    <li class="sublink"><a>sublink2</a></li>
                    <li class="sublink"><a>sublink3</a></li>
                </ul>
            </li>
             <li class="link-content" id="link-content-industry">
                <ul class="sublinks">
                    <li class="sublink"><a>sublink1</a></li>
                    <li class="sublink"><a>sublink2</a></li>
                    <li class="sublink"><a>sublink3</a></li>
                </ul>
            </li>
             <li class="link-content" id="link-content-clients">
                <ul class="sublinks">
                    <li class="sublink"><a>sublink1</a></li>
                    <li class="sublink"><a>sublink2</a></li>
                    <li class="sublink"><a>sublink3</a></li>
                </ul>
            </li>
            <li class="link-content" id="link-content-contact">
                <ul class="sublinks">
                    <li class="sublink"><a>sublink1</a></li>
                    <li class="sublink"><a>sublink2</a></li>
                    <li class="sublink"><a>sublink3</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <script>
        function hvLink(target){
            setTimeout(function(){
            var target_id = 'link-'+target;
            var target_content_id = 'link-content-'+target;
            var link_title = document.getElementById(target_id);
            var link_content = document.getElementById(target_content_id);
            link_title.classList.add("onHover");
            link_content.classList.add("onHover");
            },200);
        }
        function blLink(target){
            setTimeout(function(){
           var target_id = 'link-'+target;
            var target_content_id = 'link-content-'+target;
            var link_title = document.getElementById(target_id);
            var link_content = document.getElementById(target_content_id);
            link_title.classList.remove("onHover");
            link_content.classList.remove("onHover");
            },200);
        }
    </script>

</header>

