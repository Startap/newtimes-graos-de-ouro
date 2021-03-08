<section class="flex-column flex-justify-center padding-tb-20">
    <div class="flex-row flex-justify-center flex-align-center">
        <img class="padding-r-10" src="assets/images/icons/online-class.svg" alt="Lâmpada emanando ondas sonoras">
        <span class="text-color-light">Aulas ao vivo</span>
    </div>

    <div id="logo-container" class="margin-tb-20">
        <img src="assets/images/officeagro_logo.png" alt="Logomarca OfficeAgro">
    </div>

    <div id="digital-titans-container" class="flex-column flex-justify-center">
        <h1>
            Torne-se um 
            <span class="text-color-accent text-weight-900">ESPECIALISTA</span> 
            no cultivo de CAFÉ ESPECIAL.
        </h1>
        <div class="divisor"></div>
        <h2>
            Aprenda a produzir um café especial com mais de 80 pontos, aumentando em até 100% a sua produtividade.
        </h2>
    </div>

    <form 
        method="POST" 
        action="https://officeagro.activehosted.com/proc.php" 
        id="subscription" 
        class="_form _form_1 _inline-form _dark" 
        novalidate>
        <input type="hidden" name="u" value="1" />
        <input type="hidden" name="f" value="1" />
        <input type="hidden" name="s" />
        <input type="hidden" name="c" value="0" />
        <input type="hidden" name="m" value="0" />
        <input type="hidden" name="act" value="sub" />
        <input type="hidden" name="v" value="2" />

        <div class="_form-content">
          <div class="_form_element _x85844295 _full_width">
              <div class="_field-wrapper">
                <input type="text" name="fullname" placeholder="Seu nome completo" />
              </div>
          </div>
          <div class="_form_element _x89292842 _full_width">
              <div class="_field-wrapper">
                <input type="text" name="email" placeholder="seu e-mail" />
              </div>
          </div>
          <div class="_form_element _x20460434 _full_width">
              <div class="_field-wrapper">
                <input type="text" name="phone" placeholder="e um telefone de contato" />
              </div>
          </div>

          <div class="_form-thank-you" style="display:none;"></div>

          <div class="_button-wrapper _full-width">
              <button id="subscriptionsubmit" class="_submit button-call-to-action" type="submit">QUERO APRENDER SOBRE CAFÉ ESPECIAL</button>
          </div>
        </div>        
    </form>
</section>

<img src="assets/images/divisor.png" alt="">

<section class="flex-row flex-justify-center flex-space-evenly section-questions">
    <div class="callout-container text-align-center">
        <h1 class="padding-tb-20">O que eu vou aprender <br>nas <span class="text-color-accent text-weight-900">aulas gratuitas</span>?
        </h1>
        <span class="text-color-light">
            Você vai aprender sobre como produzir Café Especial com mais de 80 pontos,
            <br>aumentando em até 100% a sua produtividade.
        </span>
    </div>
    <div class="callout-container text-align-center">
        <h1 class="padding-tb-20">O que é um<br><span class="text-color-accent text-weight-900">especialista em cultivo de café especial</span>?
        </h1>
        <span class="text-color-light">
            É uma pessoa que domina com precisão o cultivo<br>
            de Café Especial com alta produtividade e alta qualidade oferecidas.
        </span>
    </div>
</section>

<img src="assets/images/divisor.png" alt="">

<section class="flex-row flex-justify-center padding-tb-20">
    <div class="learning-wrapper-container flex-space-between">
        <div class="learning-container">
            <div class="learning-number">1</div>
            <div class="learning-description">
                Aprenda a dominar o cultivo de <b>café especial</b> com quem já tem 
                resultado em diversos cultivos.
            </div>
        </div>
        <div class="learning-container">
            <div class="learning-number">2</div>
            <div class="learning-description">
                Aulas atualizadas com as últimas novidades, técnicas e conteúdos 
                práticos para se tornar um <b>especialista em café especial</b>.
            </div>
        </div>
        <div class="learning-container">
            <div class="learning-number">3</div>
            <div class="learning-description">
                Conhecimento tirado direto da "prática", com diversas produções de cultivos de <b>café especial</b>.
            </div>
        </div>
    </div>
</section>

<button class="button-call-to-action scroll-top">QUERO APRENDER MAIS SOBRE O CULTIVO</button>

<section id="titans-instructor" class="flex-column flex-justify-center padding-tb-20">
    <h1 class="text-align-center">Com quem vou aprender?</h1>

    <div class="instructor-container">
        <div class="instructor-image">
            <img src="assets/images/teacher_titan.png" alt="Foto em fundo branco do instrutor Gabriel">
        </div>
        <div class="instructor-description">
            <span class="instructor-title">Maciel Lemos</span>
            <span class="instructor-social-network">@office_agro</span>
            <p class="instructor-presentation">
                Maciel é Engenheiro Agrônomo, <b>mestre</b> em Ciências Ambientais, especialista na produção 
                de cafés robustas e cafés especiais, além de fundador do canal Office Agro, no YouTube.<br>
                Trabalha há 18 anos no MUNDO AGRO, nas mais diversas áreas, principalmente no aumento
                de produtividade e qualidade de bebida do Cafés Robustas, auxiliando agricultores, acadêmicos,
                técnicos e engenheiros agrônomos a atingirem a "máxima" produtividade e qualidade nas suas produções.
            </p>
        </div>
    </div>

    <div class="padding-tb-20 last-callout-section">
        <h2>Se você leu até aqui é porque o conteúdo te interessa!</h2>
        <h3>Faça sua inscrição agora! É fácil, simples e rápido!</h3>
    </div>

    <button class="button-call-to-action scroll-top">ME AVISE SOBRE AS AULAS GRATUITAS</button>
</section>

<img src="assets/images/divisor.png" style="transform: rotateY(180deg)" alt="">

<script type="text/javascript">
window.cfields = [];
window._show_thank_you = function(id, message, trackcmp_url, email) {
  var form = document.getElementById('_form_' + id + '_'), thank_you = form.querySelector('._form-thank-you');
  form.querySelector('._form-content').style.display = 'none';
  thank_you.innerHTML = message;
  thank_you.style.display = 'block';
  const vgoAlias = typeof visitorGlobalObjectAlias === 'undefined' ? 'vgo' : visitorGlobalObjectAlias;
  var visitorObject = window[vgoAlias];
  if (email && typeof visitorObject !== 'undefined') {
    visitorObject('setEmail', email);
    visitorObject('update');
  } else if (typeof(trackcmp_url) != 'undefined' && trackcmp_url) {
    // Site tracking URL to use after inline form submission.
    _load_script(trackcmp_url);
  }
  if (typeof window._form_callback !== 'undefined') window._form_callback(id);
};
window._show_error = function(id, message, html) {
  var formId = 'subscription';
  var form = document.getElementById(formId), err = document.createElement('div'), button = form.querySelector('button'), old_error = form.querySelector('._form_error');
  if (old_error) old_error.parentNode.removeChild(old_error);
  err.innerHTML = message;
  err.className = '_error-inner _form_error _no_arrow';
  var wrapper = document.createElement('div');
  wrapper.className = '_form-inner';
  wrapper.appendChild(err);
  button.parentNode.insertBefore(wrapper, button);
  document.querySelector('[id^="subscription"][id$="subscriptionsubmit"]').disabled = false;
  if (html) {
    var div = document.createElement('div');
    div.className = '_error-html';
    div.innerHTML = html;
    err.appendChild(div);
  }
};
window._load_script = function(url, callback) {
  var head = document.querySelector('head'), script = document.createElement('script'), r = false;
  script.type = 'text/javascript';
  script.charset = 'utf-8';
  script.src = url;
  if (callback) {
    script.onload = script.onreadystatechange = function() {
      if (!r && (!this.readyState || this.readyState == 'complete')) {
        r = true;
        callback();
      }
    };
  }
  head.appendChild(script);
};
(function() {
  if (window.location.search.search("excludeform") !== -1) return false;
  var getCookie = function(name) {
    var match = document.cookie.match(new RegExp('(^|; )' + name + '=([^;]+)'));
    return match ? match[2] : null;
  }
  var setCookie = function(name, value) {
    var now = new Date();
    var time = now.getTime();
    var expireTime = time + 1000 * 60 * 60 * 24 * 365;
    now.setTime(expireTime);
    document.cookie = name + '=' + value + '; expires=' + now + ';path=/';
  }
  var addEvent = function(element, event, func) {
    if (element.addEventListener) {
      element.addEventListener(event, func);
    } else {
      var oldFunc = element['on' + event];
      element['on' + event] = function() {
        oldFunc.apply(this, arguments);
        func.apply(this, arguments);
      };
    }
  }
  var _removed = false;
  var form_to_submit = document.getElementById('subscription');
  var allInputs = form_to_submit.querySelectorAll('input, select, textarea'), tooltips = [], submitted = false;

  var getUrlParam = function(name) {
    var regexStr = '[\?&]' + name + '=([^&#]*)';
    var results = new RegExp(regexStr, 'i').exec(window.location.href);
    return results != undefined ? decodeURIComponent(results[1]) : false;
  };

  for (var i = 0; i < allInputs.length; i++) {
    var regexStr = "field\\[(\\d+)\\]";
    var results = new RegExp(regexStr).exec(allInputs[i].name);
    if (results != undefined) {
      allInputs[i].dataset.name = window.cfields[results[1]];
    } else {
      allInputs[i].dataset.name = allInputs[i].name;
    }
    var fieldVal = getUrlParam(allInputs[i].dataset.name);

    if (fieldVal) {
      if (allInputs[i].dataset.autofill === "false") {
        continue;
      }
      if (allInputs[i].type == "radio" || allInputs[i].type == "checkbox") {
        if (allInputs[i].value == fieldVal) {
          allInputs[i].checked = true;
        }
      } else {
        allInputs[i].value = fieldVal;
      }
    }
  }

  var remove_tooltips = function() {
    for (var i = 0; i < tooltips.length; i++) {
      tooltips[i].tip.parentNode.removeChild(tooltips[i].tip);
    }
    tooltips = [];
  };
  var remove_tooltip = function(elem) {
    for (var i = 0; i < tooltips.length; i++) {
      if (tooltips[i].elem === elem) {
        tooltips[i].tip.parentNode.removeChild(tooltips[i].tip);
        tooltips.splice(i, 1);
        return;
      }
    }
  };
  var create_tooltip = function(elem, text) {
    var tooltip = document.createElement('div'), arrow = document.createElement('div'), inner = document.createElement('div'), new_tooltip = {};
    if (elem.type != 'radio' && elem.type != 'checkbox') {
      tooltip.className = '_error';
      arrow.className = '_error-arrow';
      inner.className = '_error-inner';
      inner.innerHTML = text;
      tooltip.appendChild(arrow);
      tooltip.appendChild(inner);
      elem.parentNode.appendChild(tooltip);
    } else {
      tooltip.className = '_error-inner _no_arrow';
      tooltip.innerHTML = text;
      elem.parentNode.insertBefore(tooltip, elem);
      new_tooltip.no_arrow = true;
    }
    new_tooltip.tip = tooltip;
    new_tooltip.elem = elem;
    tooltips.push(new_tooltip);
    return new_tooltip;
  };
  var resize_tooltip = function(tooltip) {
    var rect = tooltip.elem.getBoundingClientRect();
    var doc = document.documentElement, scrollPosition = rect.top - ((window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0));
    if (scrollPosition < 40) {
      tooltip.tip.className = tooltip.tip.className.replace(/ ?(_above|_below) ?/g, '') + ' _below';
    } else {
      tooltip.tip.className = tooltip.tip.className.replace(/ ?(_above|_below) ?/g, '') + ' _above';
    }
  };
  var resize_tooltips = function() {
    if (_removed) return;
    for (var i = 0; i < tooltips.length; i++) {
      if (!tooltips[i].no_arrow) resize_tooltip(tooltips[i]);
    }
  };
  var validate_field = function(elem, remove) {
    var tooltip = null, value = elem.value, no_error = true;
    remove ? remove_tooltip(elem) : false;
    if (elem.type != 'checkbox') elem.className = elem.className.replace(/ ?_has_error ?/g, '');
    if (elem.getAttribute('required') !== null) {
      if (elem.type == 'radio' || (elem.type == 'checkbox' && /any/.test(elem.className))) {
        var elems = form_to_submit.elements[elem.name];
        if (!(elems instanceof NodeList || elems instanceof HTMLCollection) || elems.length <= 1) {
          no_error = elem.checked;
        }
        else {
          no_error = false;
          for (var i = 0; i < elems.length; i++) {
            if (elems[i].checked) no_error = true;
          }
        }
        if (!no_error) {
          tooltip = create_tooltip(elem, "Por favor, selecione uma opção.");
        }
      } else if (elem.type =='checkbox') {
        var elems = form_to_submit.elements[elem.name], found = false, err = [];
        no_error = true;
        for (var i = 0; i < elems.length; i++) {
          if (elems[i].getAttribute('required') === null) continue;
          if (!found && elems[i] !== elem) return true;
          found = true;
          elems[i].className = elems[i].className.replace(/ ?_has_error ?/g, '');
          if (!elems[i].checked) {
            no_error = false;
            elems[i].className = elems[i].className + ' _has_error';
            err.push("Marcar %s é necessário".replace("%s", elems[i].value));
          }
        }
        if (!no_error) {
          tooltip = create_tooltip(elem, err.join('<br/>'));
        }
      } else if (elem.tagName == 'SELECT') {
        var selected = true;
        if (elem.multiple) {
          selected = false;
          for (var i = 0; i < elem.options.length; i++) {
            if (elem.options[i].selected) {
              selected = true;
              break;
            }
          }
        } else {
          for (var i = 0; i < elem.options.length; i++) {
            if (elem.options[i].selected && !elem.options[i].value) {
              selected = false;
            }
          }
        }
        if (!selected) {
          elem.className = elem.className + ' _has_error';
          no_error = false;
          tooltip = create_tooltip(elem, "Por favor, selecione uma opção.");
        }
      } else if (value === undefined || value === null || value === '') {
        elem.className = elem.className + ' _has_error';
        no_error = false;
        tooltip = create_tooltip(elem, "Este campo é necessário.");
      }
    }
    if (no_error && elem.name == 'email') {
      if (!value.match(/^[\+_a-z0-9-'&=]+(\.[\+_a-z0-9-']+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i)) {
        elem.className = elem.className + ' _has_error';
        no_error = false;
        tooltip = create_tooltip(elem, "Digite um e-mail válido");
      }
    }
    if (no_error && /date_field/.test(elem.className)) {
      if (!value.match(/^\d\d\d\d-\d\d-\d\d$/)) {
        elem.className = elem.className + ' _has_error';
        no_error = false;
        tooltip = create_tooltip(elem, "Digite uma data válida.");
      }
    }
    tooltip ? resize_tooltip(tooltip) : false;
    return no_error;
  };
  var needs_validate = function(el) {
        if(el.getAttribute('required') !== null){
            return true
        }
        if(el.name === 'email' && el.value !== ""){
            return true
        }
        return false
  };
  var validate_form = function(e) {
    var err = form_to_submit.querySelector('._form_error'), no_error = true;
    if (!submitted) {
      submitted = true;
      for (var i = 0, len = allInputs.length; i < len; i++) {
        var input = allInputs[i];
        if (needs_validate(input)) {
          if (input.type == 'text') {
            addEvent(input, 'blur', function() {
              this.value = this.value.trim();
              validate_field(this, true);
            });
            addEvent(input, 'input', function() {
              validate_field(this, true);
            });
          } else if (input.type == 'radio' || input.type == 'checkbox') {
            (function(el) {
              var radios = form_to_submit.elements[el.name];
              for (var i = 0; i < radios.length; i++) {
                addEvent(radios[i], 'click', function() {
                  validate_field(el, true);
                });
              }
            })(input);
          } else if (input.tagName == 'SELECT') {
            addEvent(input, 'change', function() {
              validate_field(this, true);
            });
          } else if (input.type == 'textarea'){
            addEvent(input, 'input', function() {
              validate_field(this, true);
            });
          }
        }
      }
    }
    remove_tooltips();
    for (var i = 0, len = allInputs.length; i < len; i++) {
      var elem = allInputs[i];
      if (needs_validate(elem)) {
        if (elem.tagName.toLowerCase() !== "select") {
          elem.value = elem.value.trim();
        }
        validate_field(elem) ? true : no_error = false;
      }
    }
    if (!no_error && e) {
      e.preventDefault();
    }
    resize_tooltips();
    return no_error;
  };
  addEvent(window, 'resize', resize_tooltips);
  addEvent(window, 'scroll', resize_tooltips);
  window._old_serialize = null;
  if (typeof serialize !== 'undefined') window._old_serialize = window.serialize;
  _load_script("//d3rxaij56vjege.cloudfront.net/form-serialize/0.3/serialize.min.js", function() {
    window._form_serialize = window.serialize;
    if (window._old_serialize) window.serialize = window._old_serialize;
  });
  var form_submit = function(e) {
    e.preventDefault();
    if (validate_form()) {
      // use this trick to get the submit button & disable it using plain javascript
      document.querySelector('#subscriptionsubmit').disabled = true;
            var serialized = _form_serialize(document.getElementById('subscription'));
      var err = form_to_submit.querySelector('._form_error');
      err ? err.parentNode.removeChild(err) : false;
      _load_script('https://officeagro.activehosted.com/proc.php?' + serialized + '&jsonp=true');
    }
    return false;
  };
  addEvent(form_to_submit, 'submit', form_submit);
})();
</script>