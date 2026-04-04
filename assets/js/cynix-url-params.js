(function () {
    'use strict';

    var params = new URLSearchParams(window.location.search);

    function get(key, fallback) {
        var value = params.get(key);
        return value && value.trim() ? value.trim() : fallback;
    }

    function initials(name) {
        return name.split(/\s+/).slice(0, 2).map(function (w) {
            return w.charAt(0).toUpperCase();
        }).join('') || 'CI';
    }

    function setText(selector, value) {
        document.querySelectorAll(selector).forEach(function (el) {
            el.textContent = value;
        });
    }

    var businessName = get('bn', 'Cynix Inc Digital Solutions');
    var email = get('e', 'info.cynixinc@gmail.com');
    var phone = get('p', '+94722558244');
    var address = get('a', '267, Jampettah Street, Colombo 13');
    var aboutTitle = get('at', 'We Build Quality. You Make It Perfect');
    var aboutDescription = get('ad', 'Our team is dedicated to delivering exceptional results on every project.');
    var marqueeText = get('mt', 'Building better solutions for tomorrow');
    var ceoTitle = get('ct', 'Director & Founder');
    var color = get('c', '#F45B1E');

    setText('.logo-company', businessName);
    setText('.logo-initials', initials(businessName));
    setText('#about .about-content-style-1 .section-title h2', aboutTitle);
    setText('#about .about-content-style-1 p.text', aboutDescription);
    setText('#about .client-item .text span', ceoTitle + ' of ' + businessName);
    setText('.marquee-section-1 .cmn-textslide', marqueeText);

    document.querySelectorAll('.logo-initials').forEach(function (el) {
        el.style.backgroundColor = color;
    });

    document.documentElement.style.setProperty('--personalization-color', color);

    document.querySelectorAll('a[href^="mailto:"]').forEach(function (el) {
        el.href = 'mailto:' + email;
        if (el.textContent.indexOf('@') !== -1 || /Send Email/i.test(el.textContent)) {
            el.textContent = email;
        }
    });

    document.querySelectorAll('a[href^="tel:"]').forEach(function (el) {
        el.href = 'tel:' + phone.replace(/[^\d+]/g, '');
        if (/\d/.test(el.textContent) || /Call Consulting/i.test(el.textContent)) {
            el.textContent = phone;
        }
    });

    setText('#contact .contact-information-list li:nth-child(2) p', address);

    document.querySelectorAll('footer p').forEach(function (el) {
        if (/Copyright/i.test(el.textContent)) {
            el.textContent = 'Copyright \u00a9 2026 ' + businessName + '. All Rights Reserved.';
        }
    });
})();
