const dBtn = document.getElementById('profile');
const menu = document.getElementById('drop_menu');

dBtn.addEventListener('mouseover', () => {
    menu.style.display = 'block';
});

menu.addEventListener('mouseover', () => {
    menu.style.display = 'block';
});

dBtn.addEventListener('mouseleave', () => {
    setTimeout(() => {
        if (!menu.matches(':hover') && !dBtn.matches(':hover')) {
            menu.style.display = 'none';
        }
    }, 100);
});

menu.addEventListener('mouseleave', () => {
    setTimeout(() => {
        if (!menu.matches(':hover') && !dBtn.matches(':hover')) {
            menu.style.display = 'none';
        }
    }, 100);
});


const profile = document.getElementById('profile-edit');
const personal = document.getElementById('personal-information');
const education = document.getElementById('educational-attainment');

const editnav = document.querySelectorAll('.edit-nav li .editnav-link');

const activeTabId = localStorage.getItem('activeTab');

editnav.forEach(nav => {
    if (nav.getAttribute('id') === activeTabId) {
        nav.classList.add('active');
    } else {
        nav.classList.remove('active');
    }
});

if (profile && personal && education) {
    if (activeTabId === 'profile') {
        profile.style.display = 'block';
        personal.style.display = 'none';
        education.style.display = 'none';
    } else if (activeTabId === 'personal') {
        profile.style.display = 'none';
        personal.style.display = 'block';
        education.style.display = 'none';
    } else if (activeTabId === 'education') {
        profile.style.display = 'none';
        personal.style.display = 'none';
        education.style.display = 'block';
    }
}

editnav.forEach(nav => {
    nav.addEventListener('click', () => {
        editnav.forEach(nav => nav.classList.remove('active'));

        nav.classList.add('active');

        localStorage.setItem('activeTab', nav.getAttribute('id'));

        if (nav.getAttribute('id') === 'profile') {
            profile.style.display = 'block';
            personal.style.display = 'none';
            education.style.display = 'none';
        } else if (nav.getAttribute('id') === 'personal') {
            profile.style.display = 'none';
            personal.style.display = 'block';
            education.style.display = 'none';
        } else if (nav.getAttribute('id') === 'education') {
            profile.style.display = 'none';
            personal.style.display = 'none';
            education.style.display = 'block';
        }
    });
});




document.addEventListener("DOMContentLoaded", function () {
    const alert = document.querySelector('.alert-success');
    if (alert) {
        setTimeout(() => {
            alert.remove();
        }, 3000);
    }
});


// status
let lastStatus = 0;

const resumeId = document.getElementById('resumeId').value;
const appStatus = document.getElementById('applicationStatus');
const circle1 = document.querySelector('.circle-1');
const circle2 = document.querySelector('.circle-2');
const circle3 = document.querySelector('.circle-3');
const circle4 = document.querySelector('.circle-4');
const circle1Inner = document.querySelector('.circle-1 span');
const circle2Inner = document.querySelector('.circle-2 span');
const circle3Inner = document.querySelector('.circle-3 span');
const circle4Inner = document.querySelector('.circle-4 span');

const circle1Icon = document.querySelector('.circle-1 i');
const circle2Icon = document.querySelector('.circle-2 i');
const circle3Icon = document.querySelector('.circle-3 i');
const circle4Icon = document.querySelector('.circle-4 i');
console.log(resumeId);

if (appStatus) {
    switch (appStatus.value) {
        case 'New':
            circle1.classList.add('passed');
            lastStatus = 1;
            localStorage.setItem(`resume_${resumeId}_status`, lastStatus);
            break;
        case 'Screening':
            circle1.classList.add('passed');
            circle2.classList.add('passed');
            lastStatus = 2;
            localStorage.setItem(`resume_${resumeId}_status`, lastStatus);
            break;
        case 'For Interview':
            circle1.classList.add('passed');
            circle2.classList.add('passed');
            circle3.classList.add('passed');
            lastStatus = 3;
            localStorage.setItem(`resume_${resumeId}_status`, lastStatus);
            break;
        case 'Hired':
            circle1.classList.add('passed');
            circle2.classList.add('passed');
            circle3.classList.add('passed');
            circle4.classList.add('passed');
            circle4Inner.innerHTML = "Hired";
            setTimeout(() => {
                circle4.classList.add('animate');
            }, 0);
            lastStatus = 4;
            localStorage.setItem(`resume_${resumeId}_status`, lastStatus);
            break;
        case 'Dropped':
            // const status = localStorage.getItem("lastStatus");
            const status = parseInt(localStorage.getItem(`resume_${resumeId}_status`));

            if (status == 2) {
                circle2.classList.add('dropped');
                circle2Inner.innerHTML = "Dropped";
                circle3Inner.innerHTML = "";
                circle4Inner.innerHTML = "";
                circle2Icon.classList.remove('bi-check-lg');
                circle2Icon.classList.add('bi-x');
                

                circle1.classList.add('passed');
                setTimeout(() => {
                    circle2.classList.add('animate');
                }, 0);
                break;
            }

            if (status == 3) {
                circle3.classList.add('dropped');
                circle3Inner.innerHTML = "Dropped";
                circle4Inner.innerHTML = "";
                circle3Icon.classList.remove('bi-check-lg');
                circle3Icon.classList.add('bi-x');

                circle1.classList.add('passed');
                circle2.classList.add('passed');
                circle2Inner.innerHTML = "Screening";
                setTimeout(() => {
                    circle3.classList.add('animate');
                }, 0);
                break;
            }

            if (status == 4) {
                circle4.classList.add('dropped');
                circle4Inner.innerHTML = "Dropped";
                circle4Icon.classList.remove('bi-check-lg');
                circle4Icon.classList.add('bi-x');

                circle1.classList.add('passed');
                circle2.classList.add('passed');
                circle3.classList.add('passed');
                circle2Inner.innerHTML = "Screening";
                circle3Inner.innerHTML = "Interview";
                setTimeout(() => {
                    circle4.classList.add('animate');
                }, 0);
                break;
            }
            break;

        default:
            break;
            
    }
}



const appStatusView = document.getElementById('appStatus');
const hcircle1 = document.querySelector('.hcircle-1');
const hcircle2 = document.querySelector('.hcircle-2');
const hcircle3 = document.querySelector('.hcircle-3');
const hcircle4 = document.querySelector('.hcircle-4');
const hcircle1Inner = document.querySelector('.hcircle-1 span');
const hcircle2Inner = document.querySelector('.hcircle-2 span');
const hcircle3Inner = document.querySelector('.hcircle-3 span');
const hcircle4Inner = document.querySelector('.hcircle-4 span');


if (appStatusView) {
    switch (appStatusView.value) {
        case 'New':
            hcircle1.classList.add('passed');
            lastStatus = 1;
            localStorage.setItem(`resume_${resumeId}_status`, lastStatus);
            break;
        case 'Screening':
            hcircle1.classList.add('passed');
            hcircle2.classList.add('passed');
            hcircle2Inner.innerHTML = "Screening";
            lastStatus = 2;
            localStorage.setItem(`resume_${resumeId}_status`, lastStatus);
            break;
        case 'For Interview':
            hcircle1.classList.add('passed');
            hcircle2.classList.add('passed');
            hcircle3.classList.add('passed');
            hcircle2Inner.innerHTML = "Screening";
            hcircle3Inner.innerHTML = "Interview";
            lastStatus = 3;
            localStorage.setItem(`resume_${resumeId}_status`, lastStatus);
            break;
        case 'Hired':
            hcircle1.classList.add('passed');
            hcircle2.classList.add('passed');
            hcircle3.classList.add('passed');
            hcircle4.classList.add('passed');
            hcircle2Inner.innerHTML = "Screening";
            hcircle3Inner.innerHTML = "Interview";
            hcircle4Inner.innerHTML = "Hired";
            setTimeout(() => {
                hcircle4.classList.add('animate');
            }, 0);
            lastStatus = 4;
            localStorage.setItem(`resume_${resumeId}_status`, lastStatus);
            break;
        case 'Dropped':
            // console.log(localStorage.getItem(`resume_${resumeId}_status`));
            // const status = localStorage.getItem("lastStatus");
            const status = parseInt(localStorage.getItem(`resume_${resumeId}_status`));

            if (status == 2) {
                hcircle2.classList.add('dropped');
                hcircle2Inner.innerHTML = "Dropped";

                hcircle1.classList.add('passed');
                setTimeout(() => {
                    hcircle2.classList.add('animate');
                }, 0);
                break;
            }



            if (status == 3) {
                hcircle3.classList.add('dropped');
                hcircle3Inner.innerHTML = "Dropped";

                hcircle1.classList.add('passed');
                hcircle2.classList.add('passed');
                hcircle2Inner.innerHTML = "Screening";
                setTimeout(() => {
                    hcircle3.classList.add('animate');
                }, 0);
                break;
            }

            if (status == 4) {
                hcircle4.classList.add('dropped');
                hcircle4Inner.innerHTML = "Dropped";

                hcircle1.classList.add('passed');
                hcircle2.classList.add('passed');
                hcircle3.classList.add('passed');
                hcircle2Inner.innerHTML = "Screening";
                hcircle3Inner.innerHTML = "Interview";
                setTimeout(() => {
                    hcircle4.classList.add('animate');
                }, 0);
                break;
            }
            break;
        default:
            break;
    }
}

// console.log(lastStatus);
