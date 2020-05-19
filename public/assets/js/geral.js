const URL = `router`

const ajaxPost = (url, values) => {
    return new Promise((resolve, reject) => {
        $.ajax({
            type: "POST",
            url: `${URL}/${url}`,
            data: { ...values },
            dataType: "json",
            success: function (resp) {
                resolve(resp)
            },
            error: function (err) {
                console.log(err)
            }
        });
    })
}

const ajaxGet = (url) => {
    return new Promise((resolve, reject) => {
        $.ajax({
            type: "GET",
            url: `${URL}/${url}`,
            dataType: "json",
            success: function (resp) {
                resolve(resp)
            },
            error: function (err) {
                reject(err)
            }
        });
    })
}

const openModal = (selector) => {
    $(selector).modal('show')
}

const closeModal = (selector) => {
    $(selector).modal('hide')
}

const openModalLogout = () => {
    openModal('#logoutModal')
}

const logout = () => {
    ajaxGet('login/index.php?action=logout')
        .then((res) => {
            if (res.status) {
                window.location.href = "/"
                closeModal('#logoutModal')
            }
        })
        .catch((err) => {
            console.log(err)
        })

}

const validField = (selector, msg) => {
    alert(`${msg}`)
    $(selector).addClass('valid-field')
    setTimeout(() => {
        $(selector).removeClass('valid-field')
    }, 3000)
}

function dataAtualFormatada(data){
    data = new Date(),
        dia  = data.getDate().toString(),
        diaF = (dia.length == 1) ? '0'+dia : dia,
        mes  = (data.getMonth()+1).toString(), //+1 pois no getMonth Janeiro começa com zero.
        mesF = (mes.length == 1) ? '0'+mes : mes,
        anoF = data.getFullYear();
    return diaF+"/"+mesF+"/"+anoF;
}

const createButton = (label, className) => {
   return $('<button>').addClass(`text-white btn btn-${className}`).html(label)
}


const modalPerfilUser = () => {
    openModal('#perfilModal')
    let perfil = JSON.parse(window.localStorage.getItem('user'))
    $('#username_perfil').val(perfil.username)
}

$.fn.serializeObject = function () {
    var o = {};
    var a = this.serializeArray();
    $.each(a, function () {
        if (o[this.name]) {
            if (!o[this.name].push) {
                o[this.name] = [o[this.name]];
            }
            o[this.name].push(this.value || '');
        } else {
            o[this.name] = this.value || '';
        }
    });
    return o;
};
