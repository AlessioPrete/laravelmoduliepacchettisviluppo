/* A polyfill for browsers that don't support ligatures. */
/* The script tag referring to this file must be placed before the ending body tag. */

/* To provide support for elements dynamically added, this script adds
   method 'icomoonLiga' to the window object. You can pass element references to this method.
*/
(function () {
    'use strict';
    function supportsProperty(p) {
        var prefixes = ['Webkit', 'Moz', 'O', 'ms'],
            i,
            div = document.createElement('div'),
            ret = p in div.style;
        if (!ret) {
            p = p.charAt(0).toUpperCase() + p.substr(1);
            for (i = 0; i < prefixes.length; i += 1) {
                ret = prefixes[i] + p in div.style;
                if (ret) {
                    break;
                }
            }
        }
        return ret;
    }
    var icons;
    if (!supportsProperty('fontFeatureSettings')) {
        icons = {
            'home': '&#xee26;',
            'house': '&#xee26;',
            'home2': '&#xee27;',
            'house2': '&#xee27;',
            'home3': '&#xee28;',
            'house3': '&#xee28;',
            'office': '&#xee29;',
            'buildings': '&#xee29;',
            'newspaper': '&#xee2a;',
            'news': '&#xee2a;',
            'pencil': '&#xee2b;',
            'write': '&#xee2b;',
            'pencil2': '&#xee2c;',
            'write2': '&#xee2c;',
            'quill': '&#xee2d;',
            'feather': '&#xee2d;',
            'pen': '&#xee2e;',
            'write3': '&#xee2e;',
            'blog': '&#xee2f;',
            'pen2': '&#xee2f;',
            'eyedropper': '&#xee30;',
            'color': '&#xee30;',
            'droplet': '&#xee31;',
            'color2': '&#xee31;',
            'paint-format': '&#xee32;',
            'format': '&#xee32;',
            'image': '&#xee33;',
            'picture': '&#xee33;',
            'images': '&#xee34;',
            'pictures': '&#xee34;',
            'camera': '&#xee35;',
            'photo': '&#xee35;',
            'headphones': '&#xee36;',
            'headset': '&#xee36;',
            'music': '&#xee37;',
            'song': '&#xee37;',
            'play': '&#xee38;',
            'video': '&#xee38;',
            'film': '&#xee39;',
            'video2': '&#xee39;',
            'video-camera': '&#xee3a;',
            'video3': '&#xee3a;',
            'dice': '&#xee3b;',
            'game': '&#xee3b;',
            'pacman': '&#xee3c;',
            'game2': '&#xee3c;',
            'spades': '&#xee3d;',
            'cards': '&#xee3d;',
            'clubs': '&#xee3e;',
            'cards2': '&#xee3e;',
            'diamonds': '&#xee3f;',
            'cards3': '&#xee3f;',
            'bullhorn': '&#xee40;',
            'megaphone': '&#xee40;',
            'connection': '&#xee41;',
            'wifi': '&#xee41;',
            'podcast': '&#xee42;',
            'broadcast': '&#xee42;',
            'feed': '&#xee43;',
            'wave': '&#xee43;',
            'mic': '&#xee44;',
            'microphone': '&#xee44;',
            'book': '&#xee45;',
            'read': '&#xee45;',
            'books': '&#xee46;',
            'library': '&#xee46;',
            'library2': '&#xee47;',
            'bank': '&#xee47;',
            'file-text': '&#xee48;',
            'file': '&#xee48;',
            'profile': '&#xee49;',
            'file2': '&#xee49;',
            'file-empty': '&#xee4a;',
            'file3': '&#xee4a;',
            'files-empty': '&#xee4b;',
            'files': '&#xee4b;',
            'file-text2': '&#xee4c;',
            'file4': '&#xee4c;',
            'file-picture': '&#xee4d;',
            'file5': '&#xee4d;',
            'file-music': '&#xee4e;',
            'file6': '&#xee4e;',
            'file-play': '&#xee4f;',
            'file7': '&#xee4f;',
            'file-video': '&#xee50;',
            'file8': '&#xee50;',
            'file-zip': '&#xee51;',
            'file9': '&#xee51;',
            'copy': '&#xee52;',
            'duplicate': '&#xee52;',
            'paste': '&#xee53;',
            'clipboard-file': '&#xee53;',
            'stack': '&#xee54;',
            'layers': '&#xee54;',
            'folder': '&#xee55;',
            'directory': '&#xee55;',
            'folder-open': '&#xee56;',
            'directory2': '&#xee56;',
            'folder-plus': '&#xee57;',
            'directory3': '&#xee57;',
            'folder-minus': '&#xee58;',
            'directory4': '&#xee58;',
            'folder-download': '&#xee59;',
            'directory5': '&#xee59;',
            'folder-upload': '&#xee5a;',
            'directory6': '&#xee5a;',
            'price-tag': '&#xee5b;',
            'price-tags': '&#xee5c;',
            'barcode': '&#xee5d;',
            'qrcode': '&#xee5e;',
            'ticket': '&#xee5f;',
            'theater': '&#xee5f;',
            'cart': '&#xee60;',
            'purchase': '&#xee60;',
            'coin-dollar': '&#xee61;',
            'money': '&#xee61;',
            'coin-euro': '&#xee62;',
            'money2': '&#xee62;',
            'coin-pound': '&#xee63;',
            'money3': '&#xee63;',
            'coin-yen': '&#xee64;',
            'money4': '&#xee64;',
            'credit-card': '&#xee65;',
            'money5': '&#xee65;',
            'calculator': '&#xee66;',
            'compute': '&#xee66;',
            'lifebuoy': '&#xee67;',
            'support': '&#xee67;',
            'phone': '&#xee68;',
            'telephone': '&#xee68;',
            'phone-hang-up': '&#xee69;',
            'telephone2': '&#xee69;',
            'address-book': '&#xee6a;',
            'contact': '&#xee6a;',
            'envelop': '&#xee6b;',
            'mail': '&#xee6b;',
            'pushpin': '&#xee6c;',
            'pin': '&#xee6c;',
            'location': '&#xee6d;',
            'map-marker': '&#xee6d;',
            'location2': '&#xee6e;',
            'map-marker2': '&#xee6e;',
            'compass': '&#xee6f;',
            'direction': '&#xee6f;',
            'compass2': '&#xee70;',
            'direction2': '&#xee70;',
            'map': '&#xee71;',
            'guide': '&#xee71;',
            'map2': '&#xee72;',
            'guide2': '&#xee72;',
            'history': '&#xee73;',
            'time': '&#xee73;',
            'clock': '&#xee74;',
            'time2': '&#xee74;',
            'clock2': '&#xee75;',
            'time3': '&#xee75;',
            'alarm': '&#xee76;',
            'time4': '&#xee76;',
            'bell': '&#xee77;',
            'alarm2': '&#xee77;',
            'stopwatch': '&#xee78;',
            'time5': '&#xee78;',
            'calendar': '&#xee79;',
            'date': '&#xee79;',
            'printer': '&#xee7a;',
            'print': '&#xee7a;',
            'keyboard': '&#xee7b;',
            'typing': '&#xee7b;',
            'display': '&#xee7c;',
            'screen': '&#xee7c;',
            'laptop': '&#xee7d;',
            'computer': '&#xee7d;',
            'mobile': '&#xee7e;',
            'cell-phone': '&#xee7e;',
            'mobile2': '&#xee7f;',
            'cell-phone2': '&#xee7f;',
            'tablet': '&#xee80;',
            'mobile3': '&#xee80;',
            'tv': '&#xee81;',
            'television': '&#xee81;',
            'drawer': '&#xee82;',
            'box': '&#xee82;',
            'drawer2': '&#xee83;',
            'box2': '&#xee83;',
            'box-add': '&#xee84;',
            'box3': '&#xee84;',
            'box-remove': '&#xee85;',
            'box4': '&#xee85;',
            'download': '&#xee86;',
            'save': '&#xee86;',
            'upload': '&#xee87;',
            'load': '&#xee87;',
            'floppy-disk': '&#xee88;',
            'save2': '&#xee88;',
            'drive': '&#xee89;',
            'save3': '&#xee89;',
            'database': '&#xee8a;',
            'db': '&#xee8a;',
            'undo': '&#xee8b;',
            'ccw': '&#xee8b;',
            'redo': '&#xee8c;',
            'cw': '&#xee8c;',
            'undo2': '&#xee8d;',
            'left': '&#xee8d;',
            'redo2': '&#xee8e;',
            'right': '&#xee8e;',
            'forward': '&#xee8f;',
            'right2': '&#xee8f;',
            'reply': '&#xee90;',
            'left2': '&#xee90;',
            'bubble': '&#xee91;',
            'comment': '&#xee91;',
            'bubbles': '&#xee92;',
            'comments': '&#xee92;',
            'bubbles2': '&#xee93;',
            'comments2': '&#xee93;',
            'bubble2': '&#xee94;',
            'comment2': '&#xee94;',
            'bubbles3': '&#xee95;',
            'comments3': '&#xee95;',
            'bubbles4': '&#xee96;',
            'comments4': '&#xee96;',
            'user': '&#xee97;',
            'profile2': '&#xee97;',
            'users': '&#xee98;',
            'group': '&#xee98;',
            'user-plus': '&#xee99;',
            'user2': '&#xee99;',
            'user-minus': '&#xee9a;',
            'user3': '&#xee9a;',
            'user-check': '&#xee9b;',
            'user4': '&#xee9b;',
            'user-tie': '&#xee9c;',
            'user5': '&#xee9c;',
            'quotes-left': '&#xee9d;',
            'ldquo': '&#xee9d;',
            'quotes-right': '&#xee9e;',
            'rdquo': '&#xee9e;',
            'hour-glass': '&#xee9f;',
            'loading': '&#xee9f;',
            'spinner': '&#xeea0;',
            'loading2': '&#xeea0;',
            'spinner2': '&#xeea1;',
            'loading3': '&#xeea1;',
            'spinner3': '&#xeea2;',
            'loading4': '&#xeea2;',
            'spinner4': '&#xeea3;',
            'loading5': '&#xeea3;',
            'spinner5': '&#xeea4;',
            'loading6': '&#xeea4;',
            'spinner6': '&#xeea5;',
            'loading7': '&#xeea5;',
            'spinner7': '&#xeea6;',
            'loading8': '&#xeea6;',
            'spinner8': '&#xeea7;',
            'loading9': '&#xeea7;',
            'spinner9': '&#xeea8;',
            'loading10': '&#xeea8;',
            'spinner10': '&#xeea9;',
            'loading11': '&#xeea9;',
            'spinner11': '&#xeeaa;',
            'loading12': '&#xeeaa;',
            'binoculars': '&#xeeab;',
            'lookup': '&#xeeab;',
            'search': '&#xeeac;',
            'magnifier': '&#xeeac;',
            'zoom-in': '&#xeead;',
            'magnifier2': '&#xeead;',
            'zoom-out': '&#xeeae;',
            'magnifier3': '&#xeeae;',
            'enlarge': '&#xeeaf;',
            'expand': '&#xeeaf;',
            'shrink': '&#xeeb0;',
            'collapse': '&#xeeb0;',
            'enlarge2': '&#xeeb1;',
            'expand2': '&#xeeb1;',
            'shrink2': '&#xeeb2;',
            'collapse2': '&#xeeb2;',
            'key': '&#xeeb3;',
            'password': '&#xeeb3;',
            'key2': '&#xeeb4;',
            'password2': '&#xeeb4;',
            'lock': '&#xeeb5;',
            'secure': '&#xeeb5;',
            'unlocked': '&#xeeb6;',
            'lock-open': '&#xeeb6;',
            'wrench': '&#xeeb7;',
            'tool': '&#xeeb7;',
            'equalizer': '&#xeeb8;',
            'sliders': '&#xeeb8;',
            'equalizer2': '&#xeeb9;',
            'sliders2': '&#xeeb9;',
            'cog': '&#xeeba;',
            'gear': '&#xeeba;',
            'cogs': '&#xeebb;',
            'gears': '&#xeebb;',
            'hammer': '&#xeebc;',
            'tool2': '&#xeebc;',
            'magic-wand': '&#xeebd;',
            'wizard': '&#xeebd;',
            'aid-kit': '&#xeebe;',
            'health': '&#xeebe;',
            'bug': '&#xeebf;',
            'virus': '&#xeebf;',
            'pie-chart': '&#xeec0;',
            'stats': '&#xeec0;',
            'stats-dots': '&#xeec1;',
            'stats2': '&#xeec1;',
            'stats-bars': '&#xeec2;',
            'stats3': '&#xeec2;',
            'stats-bars2': '&#xeec3;',
            'stats4': '&#xeec3;',
            'trophy': '&#xeec4;',
            'cup': '&#xeec4;',
            'gift': '&#xeec5;',
            'present': '&#xeec5;',
            'glass': '&#xeec6;',
            'drink': '&#xeec6;',
            'glass2': '&#xeec7;',
            'drink2': '&#xeec7;',
            'mug': '&#xeec8;',
            'drink3': '&#xeec8;',
            'spoon-knife': '&#xeec9;',
            'food': '&#xeec9;',
            'leaf': '&#xeeca;',
            'nature': '&#xeeca;',
            'rocket': '&#xeecb;',
            'jet': '&#xeecb;',
            'meter': '&#xeecc;',
            'gauge': '&#xeecc;',
            'meter2': '&#xeecd;',
            'gauge2': '&#xeecd;',
            'hammer2': '&#xeece;',
            'gavel': '&#xeece;',
            'fire': '&#xeecf;',
            'flame': '&#xeecf;',
            'lab': '&#xeed0;',
            'beta': '&#xeed0;',
            'magnet': '&#xeed1;',
            'attract': '&#xeed1;',
            'bin': '&#xeed2;',
            'trashcan': '&#xeed2;',
            'bin2': '&#xeed3;',
            'trashcan2': '&#xeed3;',
            'briefcase': '&#xeed4;',
            'portfolio': '&#xeed4;',
            'airplane': '&#xeed5;',
            'travel': '&#xeed5;',
            'truck': '&#xeed6;',
            'transit': '&#xeed6;',
            'road': '&#xeed7;',
            'asphalt': '&#xeed7;',
            'accessibility': '&#xeed8;',
            'target': '&#xeed9;',
            'goal': '&#xeed9;',
            'shield': '&#xeeda;',
            'security': '&#xeeda;',
            'power': '&#xeedb;',
            'lightning': '&#xeedb;',
            'switch': '&#xeedc;',
            'power-cord': '&#xeedd;',
            'plugin': '&#xeedd;',
            'clipboard': '&#xeede;',
            'board': '&#xeede;',
            'list-numbered': '&#xeedf;',
            'options': '&#xeedf;',
            'list': '&#xeee0;',
            'todo': '&#xeee0;',
            'list2': '&#xeee1;',
            'todo2': '&#xeee1;',
            'tree': '&#xeee2;',
            'branches': '&#xeee2;',
            'menu': '&#xeee3;',
            'list3': '&#xeee3;',
            'menu2': '&#xeee4;',
            'options2': '&#xeee4;',
            'menu3': '&#xeee5;',
            'options3': '&#xeee5;',
            'menu4': '&#xeee6;',
            'options4': '&#xeee6;',
            'cloud': '&#xeee7;',
            'weather': '&#xeee7;',
            'cloud-download': '&#xeee8;',
            'cloud2': '&#xeee8;',
            'cloud-upload': '&#xeee9;',
            'cloud3': '&#xeee9;',
            'cloud-check': '&#xeeea;',
            'cloud4': '&#xeeea;',
            'download2': '&#xeeeb;',
            'save4': '&#xeeeb;',
            'upload2': '&#xeeec;',
            'load2': '&#xeeec;',
            'download3': '&#xeeed;',
            'save5': '&#xeeed;',
            'upload3': '&#xeeee;',
            'load3': '&#xeeee;',
            'sphere': '&#xeeef;',
            'globe': '&#xeeef;',
            'earth': '&#xeef0;',
            'globe2': '&#xeef0;',
            'link': '&#xeef1;',
            'chain': '&#xeef1;',
            'flag': '&#xeef2;',
            'report': '&#xeef2;',
            'attachment': '&#xeef3;',
            'paperclip': '&#xeef3;',
            'eye': '&#xeef4;',
            'views': '&#xeef4;',
            'eye-plus': '&#xeef5;',
            'views2': '&#xeef5;',
            'eye-minus': '&#xeef6;',
            'views3': '&#xeef6;',
            'eye-blocked': '&#xeef7;',
            'views4': '&#xeef7;',
            'bookmark': '&#xeef8;',
            'ribbon': '&#xeef8;',
            'bookmarks': '&#xeef9;',
            'ribbons': '&#xeef9;',
            'sun': '&#xeefa;',
            'weather2': '&#xeefa;',
            'contrast': '&#xeefb;',
            'brightness-contrast': '&#xeefc;',
            'star-empty': '&#xeefd;',
            'rate': '&#xeefd;',
            'star-half': '&#xeefe;',
            'rate2': '&#xeefe;',
            'star-full': '&#xeeff;',
            'rate3': '&#xeeff;',
            'heart': '&#xef00;',
            'like': '&#xef00;',
            'heart-broken': '&#xef01;',
            'heart2': '&#xef01;',
            'man': '&#xef02;',
            'male': '&#xef02;',
            'woman': '&#xef03;',
            'female': '&#xef03;',
            'man-woman': '&#xef04;',
            'toilet': '&#xef04;',
            'happy': '&#xef05;',
            'emoticon': '&#xef05;',
            'happy2': '&#xef06;',
            'emoticon2': '&#xef06;',
            'smile': '&#xef07;',
            'emoticon3': '&#xef07;',
            'smile2': '&#xef08;',
            'emoticon4': '&#xef08;',
            'tongue': '&#xef09;',
            'emoticon5': '&#xef09;',
            'tongue2': '&#xef0a;',
            'emoticon6': '&#xef0a;',
            'sad': '&#xef0b;',
            'emoticon7': '&#xef0b;',
            'sad2': '&#xef0c;',
            'emoticon8': '&#xef0c;',
            'wink': '&#xef0d;',
            'emoticon9': '&#xef0d;',
            'wink2': '&#xef0e;',
            'emoticon10': '&#xef0e;',
            'grin': '&#xef0f;',
            'emoticon11': '&#xef0f;',
            'grin2': '&#xef10;',
            'emoticon12': '&#xef10;',
            'cool': '&#xef11;',
            'emoticon13': '&#xef11;',
            'cool2': '&#xef12;',
            'emoticon14': '&#xef12;',
            'angry': '&#xef13;',
            'emoticon15': '&#xef13;',
            'angry2': '&#xef14;',
            'emoticon16': '&#xef14;',
            'evil': '&#xef15;',
            'emoticon17': '&#xef15;',
            'evil2': '&#xef16;',
            'emoticon18': '&#xef16;',
            'shocked': '&#xef17;',
            'emoticon19': '&#xef17;',
            'shocked2': '&#xef18;',
            'emoticon20': '&#xef18;',
            'baffled': '&#xef19;',
            'emoticon21': '&#xef19;',
            'baffled2': '&#xef1a;',
            'emoticon22': '&#xef1a;',
            'confused': '&#xef1b;',
            'emoticon23': '&#xef1b;',
            'confused2': '&#xef1c;',
            'emoticon24': '&#xef1c;',
            'neutral': '&#xef1d;',
            'emoticon25': '&#xef1d;',
            'neutral2': '&#xef1e;',
            'emoticon26': '&#xef1e;',
            'hipster': '&#xef1f;',
            'emoticon27': '&#xef1f;',
            'hipster2': '&#xef20;',
            'emoticon28': '&#xef20;',
            'wondering': '&#xef21;',
            'emoticon29': '&#xef21;',
            'wondering2': '&#xef22;',
            'emoticon30': '&#xef22;',
            'sleepy': '&#xef23;',
            'emoticon31': '&#xef23;',
            'sleepy2': '&#xef24;',
            'emoticon32': '&#xef24;',
            'frustrated': '&#xef25;',
            'emoticon33': '&#xef25;',
            'frustrated2': '&#xef26;',
            'emoticon34': '&#xef26;',
            'crying': '&#xef27;',
            'emoticon35': '&#xef27;',
            'crying2': '&#xef28;',
            'emoticon36': '&#xef28;',
            'point-up': '&#xef29;',
            'finger': '&#xef29;',
            'point-right': '&#xef2a;',
            'finger2': '&#xef2a;',
            'point-down': '&#xef2b;',
            'finger3': '&#xef2b;',
            'point-left': '&#xef2c;',
            'finger4': '&#xef2c;',
            'warning': '&#xef2d;',
            'sign': '&#xef2d;',
            'notification': '&#xef2e;',
            'warning2': '&#xef2e;',
            'question': '&#xef2f;',
            'help': '&#xef2f;',
            'plus': '&#xef30;',
            'add': '&#xef30;',
            'minus': '&#xef31;',
            'subtract': '&#xef31;',
            'info': '&#xef32;',
            'information': '&#xef32;',
            'cancel-circle': '&#xef33;',
            'close': '&#xef33;',
            'blocked': '&#xef34;',
            'forbidden': '&#xef34;',
            'cross': '&#xef35;',
            'cancel': '&#xef35;',
            'checkmark': '&#xef36;',
            'tick': '&#xef36;',
            'checkmark2': '&#xef37;',
            'tick2': '&#xef37;',
            'spell-check': '&#xef38;',
            'spelling': '&#xef38;',
            'enter': '&#xef39;',
            'signin': '&#xef39;',
            'exit': '&#xef3a;',
            'signout': '&#xef3a;',
            'play2': '&#xef3b;',
            'player': '&#xef3b;',
            'pause': '&#xef3c;',
            'player2': '&#xef3c;',
            'stop': '&#xef3d;',
            'player3': '&#xef3d;',
            'previous': '&#xef3e;',
            'player4': '&#xef3e;',
            'next': '&#xef3f;',
            'player5': '&#xef3f;',
            'backward': '&#xef40;',
            'player6': '&#xef40;',
            'forward2': '&#xef41;',
            'player7': '&#xef41;',
            'play3': '&#xef42;',
            'player8': '&#xef42;',
            'pause2': '&#xef43;',
            'player9': '&#xef43;',
            'stop2': '&#xef44;',
            'player10': '&#xef44;',
            'backward2': '&#xef45;',
            'player11': '&#xef45;',
            'forward3': '&#xef46;',
            'player12': '&#xef46;',
            'first': '&#xef47;',
            'player13': '&#xef47;',
            'last': '&#xef48;',
            'player14': '&#xef48;',
            'previous2': '&#xef49;',
            'player15': '&#xef49;',
            'next2': '&#xef4a;',
            'player16': '&#xef4a;',
            'eject': '&#xef4b;',
            'player17': '&#xef4b;',
            'volume-high': '&#xef4c;',
            'volume': '&#xef4c;',
            'volume-medium': '&#xef4d;',
            'volume2': '&#xef4d;',
            'volume-low': '&#xef4e;',
            'volume3': '&#xef4e;',
            'volume-mute': '&#xef4f;',
            'volume4': '&#xef4f;',
            'volume-mute2': '&#xef50;',
            'volume5': '&#xef50;',
            'volume-increase': '&#xef51;',
            'volume6': '&#xef51;',
            'volume-decrease': '&#xef52;',
            'volume7': '&#xef52;',
            'loop': '&#xef53;',
            'repeat': '&#xef53;',
            'loop2': '&#xef54;',
            'repeat2': '&#xef54;',
            'infinite': '&#xef55;',
            'shuffle': '&#xef56;',
            'random': '&#xef56;',
            'arrow-up-left': '&#xef57;',
            'up-left': '&#xef57;',
            'arrow-up': '&#xef58;',
            'up': '&#xef58;',
            'arrow-up-right': '&#xef59;',
            'up-right': '&#xef59;',
            'arrow-right': '&#xef5a;',
            'right3': '&#xef5a;',
            'arrow-down-right': '&#xef5b;',
            'down-right': '&#xef5b;',
            'arrow-down': '&#xef5c;',
            'down': '&#xef5c;',
            'arrow-down-left': '&#xef5d;',
            'down-left': '&#xef5d;',
            'arrow-left': '&#xef5e;',
            'left3': '&#xef5e;',
            'arrow-up-left2': '&#xef5f;',
            'up-left2': '&#xef5f;',
            'arrow-up2': '&#xef60;',
            'up2': '&#xef60;',
            'arrow-up-right2': '&#xef61;',
            'up-right2': '&#xef61;',
            'arrow-right2': '&#xef62;',
            'right4': '&#xef62;',
            'arrow-down-right2': '&#xef63;',
            'down-right2': '&#xef63;',
            'arrow-down2': '&#xef64;',
            'down2': '&#xef64;',
            'arrow-down-left2': '&#xef65;',
            'down-left2': '&#xef65;',
            'arrow-left2': '&#xef66;',
            'left4': '&#xef66;',
            'circle-up': '&#xef67;',
            'up3': '&#xef67;',
            'circle-right': '&#xef68;',
            'right5': '&#xef68;',
            'circle-down': '&#xef69;',
            'down3': '&#xef69;',
            'circle-left': '&#xef6a;',
            'left5': '&#xef6a;',
            'tab': '&#xef6b;',
            'arrows': '&#xef6b;',
            'move-up': '&#xef6c;',
            'sort': '&#xef6c;',
            'move-down': '&#xef6d;',
            'sort2': '&#xef6d;',
            'sort-alpha-asc': '&#xef6e;',
            'arrange': '&#xef6e;',
            'sort-alpha-desc': '&#xef6f;',
            'arrange2': '&#xef6f;',
            'sort-numeric-asc': '&#xef70;',
            'arrange3': '&#xef70;',
            'sort-numberic-desc': '&#xef71;',
            'arrange4': '&#xef71;',
            'sort-amount-asc': '&#xef72;',
            'arrange5': '&#xef72;',
            'sort-amount-desc': '&#xef73;',
            'arrange6': '&#xef73;',
            'command': '&#xef74;',
            'cmd': '&#xef74;',
            'shift': '&#xef75;',
            'ctrl': '&#xef76;',
            'control': '&#xef76;',
            'opt': '&#xef77;',
            'option': '&#xef77;',
            'checkbox-checked': '&#xef78;',
            'checkbox': '&#xef78;',
            'checkbox-unchecked': '&#xef79;',
            'checkbox2': '&#xef79;',
            'radio-checked': '&#xef7a;',
            'radio-button': '&#xef7a;',
            'radio-checked2': '&#xef7b;',
            'radio-button2': '&#xef7b;',
            'radio-unchecked': '&#xef7c;',
            'radio-button3': '&#xef7c;',
            'crop': '&#xef7d;',
            'resize': '&#xef7d;',
            'make-group': '&#xef7e;',
            'ungroup': '&#xef7f;',
            'scissors': '&#xef80;',
            'cut': '&#xef80;',
            'filter': '&#xef81;',
            'funnel': '&#xef81;',
            'font': '&#xef82;',
            'typeface': '&#xef82;',
            'ligature': '&#xef83;',
            'typography': '&#xef83;',
            'ligature2': '&#xef84;',
            'typography2': '&#xef84;',
            'text-height': '&#xef85;',
            'wysiwyg': '&#xef85;',
            'text-width': '&#xef86;',
            'wysiwyg2': '&#xef86;',
            'font-size': '&#xef87;',
            'wysiwyg3': '&#xef87;',
            'bold': '&#xef88;',
            'wysiwyg4': '&#xef88;',
            'underline': '&#xef89;',
            'wysiwyg5': '&#xef89;',
            'italic': '&#xef8a;',
            'wysiwyg6': '&#xef8a;',
            'strikethrough': '&#xef8b;',
            'wysiwyg7': '&#xef8b;',
            'omega': '&#xef8c;',
            'wysiwyg8': '&#xef8c;',
            'sigma': '&#xef8d;',
            'wysiwyg9': '&#xef8d;',
            'page-break': '&#xef8e;',
            'wysiwyg10': '&#xef8e;',
            'superscript': '&#xef8f;',
            'wysiwyg11': '&#xef8f;',
            'subscript': '&#xef90;',
            'wysiwyg12': '&#xef90;',
            'superscript2': '&#xef91;',
            'wysiwyg13': '&#xef91;',
            'subscript2': '&#xef92;',
            'wysiwyg14': '&#xef92;',
            'text-color': '&#xef93;',
            'wysiwyg15': '&#xef93;',
            'pagebreak': '&#xef94;',
            'wysiwyg16': '&#xef94;',
            'clear-formatting': '&#xef95;',
            'wysiwyg17': '&#xef95;',
            'table': '&#xef96;',
            'wysiwyg18': '&#xef96;',
            'table2': '&#xef97;',
            'wysiwyg19': '&#xef97;',
            'insert-template': '&#xef98;',
            'wysiwyg20': '&#xef98;',
            'pilcrow': '&#xef99;',
            'wysiwyg21': '&#xef99;',
            'ltr': '&#xef9a;',
            'wysiwyg22': '&#xef9a;',
            'rtl': '&#xef9b;',
            'wysiwyg23': '&#xef9b;',
            'section': '&#xef9c;',
            'wysiwyg24': '&#xef9c;',
            'paragraph-left': '&#xef9d;',
            'wysiwyg25': '&#xef9d;',
            'paragraph-center': '&#xef9e;',
            'wysiwyg26': '&#xef9e;',
            'paragraph-right': '&#xef9f;',
            'wysiwyg27': '&#xef9f;',
            'paragraph-justify': '&#xefa0;',
            'wysiwyg28': '&#xefa0;',
            'indent-increase': '&#xefa1;',
            'wysiwyg29': '&#xefa1;',
            'indent-decrease': '&#xefa2;',
            'wysiwyg30': '&#xefa2;',
            'share': '&#xefa3;',
            'out': '&#xefa3;',
            'new-tab': '&#xefa4;',
            'out2': '&#xefa4;',
            'embed': '&#xefa5;',
            'code': '&#xefa5;',
            'embed2': '&#xefa6;',
            'code2': '&#xefa6;',
            'terminal': '&#xefa7;',
            'console': '&#xefa7;',
            'share2': '&#xefa8;',
            'social': '&#xefa8;',
            'mail2': '&#xefa9;',
            'contact2': '&#xefa9;',
            'mail3': '&#xefaa;',
            'contact3': '&#xefaa;',
            'mail4': '&#xefab;',
            'contact4': '&#xefab;',
            'mail5': '&#xefac;',
            'contact5': '&#xefac;',
            'amazon': '&#xefad;',
            'brand': '&#xefad;',
            'google': '&#xefae;',
            'brand2': '&#xefae;',
            'google2': '&#xefaf;',
            'brand3': '&#xefaf;',
            'google3': '&#xefb0;',
            'brand4': '&#xefb0;',
            'google-plus': '&#xefb1;',
            'brand5': '&#xefb1;',
            'google-plus2': '&#xefb2;',
            'brand6': '&#xefb2;',
            'google-plus3': '&#xefb3;',
            'brand7': '&#xefb3;',
            'hangouts': '&#xefb4;',
            'brand8': '&#xefb4;',
            'google-drive': '&#xefb5;',
            'brand9': '&#xefb5;',
            'facebook': '&#xefb6;',
            'brand10': '&#xefb6;',
            'facebook2': '&#xefb7;',
            'brand11': '&#xefb7;',
            'instagram': '&#xefb8;',
            'brand12': '&#xefb8;',
            'whatsapp': '&#xefb9;',
            'brand13': '&#xefb9;',
            'spotify': '&#xefba;',
            'brand14': '&#xefba;',
            'telegram': '&#xefbb;',
            'brand15': '&#xefbb;',
            'twitter': '&#xefbc;',
            'brand16': '&#xefbc;',
            'vine': '&#xefbd;',
            'brand17': '&#xefbd;',
            'vk': '&#xefbe;',
            'brand18': '&#xefbe;',
            'renren': '&#xefbf;',
            'brand19': '&#xefbf;',
            'sina-weibo': '&#xefc0;',
            'brand20': '&#xefc0;',
            'feed2': '&#xefc1;',
            'rss': '&#xefc1;',
            'feed3': '&#xefc2;',
            'rss2': '&#xefc2;',
            'youtube': '&#xefc3;',
            'brand21': '&#xefc3;',
            'youtube2': '&#xefc4;',
            'brand22': '&#xefc4;',
            'twitch': '&#xefc5;',
            'brand23': '&#xefc5;',
            'vimeo': '&#xefc6;',
            'brand24': '&#xefc6;',
            'vimeo2': '&#xefc7;',
            'brand25': '&#xefc7;',
            'lanyrd': '&#xefc8;',
            'brand26': '&#xefc8;',
            'flickr': '&#xefc9;',
            'brand27': '&#xefc9;',
            'flickr2': '&#xefca;',
            'brand28': '&#xefca;',
            'flickr3': '&#xefcb;',
            'brand29': '&#xefcb;',
            'flickr4': '&#xefcc;',
            'brand30': '&#xefcc;',
            'dribbble': '&#xefcd;',
            'brand31': '&#xefcd;',
            'behance': '&#xefce;',
            'brand32': '&#xefce;',
            'behance2': '&#xefcf;',
            'brand33': '&#xefcf;',
            'deviantart': '&#xefd0;',
            'brand34': '&#xefd0;',
            '500px': '&#xefd1;',
            'brand35': '&#xefd1;',
            'steam': '&#xefd2;',
            'brand36': '&#xefd2;',
            'steam2': '&#xefd3;',
            'brand37': '&#xefd3;',
            'dropbox': '&#xefd4;',
            'brand38': '&#xefd4;',
            'onedrive': '&#xefd5;',
            'brand39': '&#xefd5;',
            'github': '&#xefd6;',
            'brand40': '&#xefd6;',
            'npm': '&#xefd7;',
            'brand41': '&#xefd7;',
            'basecamp': '&#xefd8;',
            'brand42': '&#xefd8;',
            'trello': '&#xefd9;',
            'brand43': '&#xefd9;',
            'wordpress': '&#xefda;',
            'brand44': '&#xefda;',
            'joomla': '&#xefdb;',
            'brand45': '&#xefdb;',
            'ello': '&#xefdc;',
            'brand46': '&#xefdc;',
            'blogger': '&#xefdd;',
            'brand47': '&#xefdd;',
            'blogger2': '&#xefde;',
            'brand48': '&#xefde;',
            'tumblr': '&#xefdf;',
            'brand49': '&#xefdf;',
            'tumblr2': '&#xefe0;',
            'brand50': '&#xefe0;',
            'yahoo': '&#xefe1;',
            'brand51': '&#xefe1;',
            'yahoo2': '&#xefe2;',
            'tux': '&#xefe3;',
            'brand52': '&#xefe3;',
            'apple': '&#xefe4;',
            'brand53': '&#xefe4;',
            'finder': '&#xefe5;',
            'brand54': '&#xefe5;',
            'android': '&#xefe6;',
            'brand55': '&#xefe6;',
            'windows': '&#xefe7;',
            'brand56': '&#xefe7;',
            'windows8': '&#xefe8;',
            'brand57': '&#xefe8;',
            'soundcloud': '&#xefe9;',
            'brand58': '&#xefe9;',
            'soundcloud2': '&#xefea;',
            'brand59': '&#xefea;',
            'skype': '&#xefeb;',
            'brand60': '&#xefeb;',
            'reddit': '&#xefec;',
            'brand61': '&#xefec;',
            'hackernews': '&#xefed;',
            'brand62': '&#xefed;',
            'wikipedia': '&#xefee;',
            'brand63': '&#xefee;',
            'linkedin': '&#xefef;',
            'brand64': '&#xefef;',
            'linkedin2': '&#xeff0;',
            'brand65': '&#xeff0;',
            'lastfm': '&#xeff1;',
            'brand66': '&#xeff1;',
            'lastfm2': '&#xeff2;',
            'brand67': '&#xeff2;',
            'delicious': '&#xeff3;',
            'brand68': '&#xeff3;',
            'stumbleupon': '&#xeff4;',
            'brand69': '&#xeff4;',
            'stumbleupon2': '&#xeff5;',
            'brand70': '&#xeff5;',
            'stackoverflow': '&#xeff6;',
            'brand71': '&#xeff6;',
            'pinterest': '&#xeff7;',
            'brand72': '&#xeff7;',
            'pinterest2': '&#xeff8;',
            'brand73': '&#xeff8;',
            'xing': '&#xeff9;',
            'brand74': '&#xeff9;',
            'xing2': '&#xeffa;',
            'brand75': '&#xeffa;',
            'flattr': '&#xeffb;',
            'brand76': '&#xeffb;',
            'foursquare': '&#xeffc;',
            'brand77': '&#xeffc;',
            'yelp': '&#xeffd;',
            'brand78': '&#xeffd;',
            'paypal': '&#xeffe;',
            'brand79': '&#xeffe;',
            'chrome': '&#xefff;',
            'browser': '&#xefff;',
            'firefox': '&#xf000;',
            'browser2': '&#xf000;',
            'IE': '&#xf001;',
            'browser3': '&#xf001;',
            'edge': '&#xf002;',
            'browser4': '&#xf002;',
            'safari': '&#xf003;',
            'browser5': '&#xf003;',
            'opera': '&#xf004;',
            'browser6': '&#xf004;',
            'file-pdf': '&#xf005;',
            'file10': '&#xf005;',
            'file-openoffice': '&#xf006;',
            'file11': '&#xf006;',
            'file-word': '&#xf007;',
            'file12': '&#xf007;',
            'file-excel': '&#xf008;',
            'file13': '&#xf008;',
            'libreoffice': '&#xf009;',
            'file14': '&#xf009;',
            'html-five': '&#xf00a;',
            'w3c': '&#xf00a;',
            'html-five2': '&#xf00b;',
            'w3c2': '&#xf00b;',
            'css3': '&#xf00c;',
            'w3c3': '&#xf00c;',
            'git': '&#xf00d;',
            'brand80': '&#xf00d;',
            'codepen': '&#xf00e;',
            'brand81': '&#xf00e;',
            'svg': '&#xf00f;',
            'IcoMoon': '&#xf010;',
            'icomoon': '&#xf010;',
          '0': 0
        };
        delete icons['0'];
        window.icomoonLiga = function (els) {
            var classes,
                el,
                i,
                innerHTML,
                key;
            els = els || document.getElementsByTagName('*');
            if (!els.length) {
                els = [els];
            }
            for (i = 0; ; i += 1) {
                el = els[i];
                if (!el) {
                    break;
                }
                classes = el.className;
                if (/icon-/.test(classes)) {
                    innerHTML = el.innerHTML;
                    if (innerHTML && innerHTML.length > 1) {
                        for (key in icons) {
                            if (icons.hasOwnProperty(key)) {
                                innerHTML = innerHTML.replace(new RegExp(key, 'g'), icons[key]);
                            }
                        }
                        el.innerHTML = innerHTML;
                    }
                }
            }
        };
        window.icomoonLiga();
    }
}());
