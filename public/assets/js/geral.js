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
