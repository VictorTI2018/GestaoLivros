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
