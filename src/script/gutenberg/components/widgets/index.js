
import NumberWidget from './number-widget.js'
import SelectWidget from './select-widget.js';
import TaxQueryWidget from './tax-query-widget.js';
import TaxonomyTerm from './taxonomy-term.js';
import TextWidget from './text-widget.js';
import ToggleWidget from './toggle-widget.js';

const widgets = {
    text: TextWidget,
    number: NumberWidget,
    toggle: ToggleWidget,
    select: SelectWidget,
    taxonomy_term: TaxonomyTerm,
    tax_query: TaxQueryWidget,
}

export default widgets;