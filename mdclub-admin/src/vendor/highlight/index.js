import $ from 'mdui.jq';
import hljs from 'highlight.js/lib/core';
import 'highlight.js/styles/vs.css';
import './style-dark.less';

import xml from 'highlight.js/lib/languages/xml';
import css from 'highlight.js/lib/languages/css';
import javascript from 'highlight.js/lib/languages/javascript';
import json from 'highlight.js/lib/languages/json';
import php from 'highlight.js/lib/languages/php';

hljs.registerLanguage('xml', xml);
hljs.registerLanguage('css', css);
hljs.registerLanguage('javascript', javascript);
hljs.registerLanguage('json', json);
hljs.registerLanguage('php', php);

export default (element) => {
  $(element)
    .find('pre')
    .each((_, block) => {
      hljs.highlightElement(block);
    });
};
