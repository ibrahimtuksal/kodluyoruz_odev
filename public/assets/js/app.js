const shortenButton = document.getElementById('shortenButton');
const urlInp = document.getElementById('urlinput');

if ( shortenButton ) {
    shortenButton.addEventListener('click',function(){
        if (shortenButton.classList.contains('copy')){
            urlInp.select();
            urlInp.setSelectionRange(0, 99999);
            document.execCommand("copy");
            shortenButton.innerHTML = 'Copied !';
        }
    });
}

function createShortUrl() {
    if (!shortenButton.classList.contains('copy')){
        const formError = document.getElementsByClassName('form-error')[0];
        const formSuccess = document.getElementsByClassName('form-success')[0];

        formError.innerHTML = '';
        formError.classList.remove('show');
        formSuccess.classList.remove('show');
        urlInp.classList.remove('error');

        if (urlInp.value.trim().length > 0) {
            postUrl();
        } else {
            formError.innerHTML = 'Bu alana boş bırakılamaz';
            formError.classList.add('show');
            urlInp.classList.add('error');
        }
    }
    return false;
}

function postUrl(){
    const formData = new FormData();
    const formError = document.getElementsByClassName('form-error')[0];
    const formSuccess = document.getElementsByClassName('form-success')[0];

    formData.append('url',urlInp.value);

    fetch('/url/create', {
        method: 'POST',
        /*headers : {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        }*/
        body : formData
    }).then( resp => resp.json() )
        .then( resp => {

            if (resp.error == true){
                formError.innerHTML = resp.errorMessage.url;
                formError.classList.add('show');
            } else {
                /*formSuccess.innerHTML = 'url başarıyla oluşturuldu';
                formSuccess.classList.add('show');*/

                urlInp.value = resp.response;
                urlInp.classList.add('success');

                shortenButton.innerHTML = 'Copy';
                shortenButton.classList.add('copy');
            }
        } )
        .catch(err=>{
            console.log(err);
        })
}

let activePassiveBtns = document.getElementsByClassName('active-passive-btn');

function isActivePassiveFunc() {
    let isActive = this.getAttribute('data-is-active');
    let userId = this.getAttribute('data-user-id');
    axios.post(APP.ajaxUrl, {
        action: 'activePassive',
        isActive,
        userId
    }).then((res) => {
        let icon = this.querySelector('.on-off-icon');
        let text = this.querySelector('span');

        if ( isActive == 'true' ) {
            this.classList.remove("btn-success");
            this.classList.add("btn-warning");
            icon.classList.remove('fa-toggle-on');
            icon.classList.add('fa-toggle-off');
            text.innerHTML = 'Pasifleştir';
            this.setAttribute("data-is-active", "false");
        } else {
            this.classList.remove("btn-warning");
            this.classList.add("btn-success");
            icon.classList.remove('fa-toggle-off');
            icon.classList.add('fa-toggle-on');
            text.innerHTML = 'Aktifleştir';
            this.setAttribute("data-is-active", "true");
        }
    }).catch((err) => {
        console.log(err);
    })
};

Array.from(activePassiveBtns).forEach(function(element) {
    element.addEventListener('click', isActivePassiveFunc);
});