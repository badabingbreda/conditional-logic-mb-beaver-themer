var addRuleTypeCategory = BBLogic.api.addRuleTypeCategory,
    addRuleType = BBLogic.api.addRuleType,
    getFormPreset = BBLogic.api.getFormPreset,
    __ = BBLogic.i18n.__;


addRuleTypeCategory('bb-cl-memberpress', {
    label: 'MemberPress (unofficial)'
});


addRuleType('bb-cl-memberpress/rule', {
    label: 'MemberPress Rule',
    category: 'bb-cl-memberpress',
	form: function form(_ref) {
		var rule = _ref.rule;
		//var value = rule.value;
		var operator = rule.operator;

		return {
			operator: {
				type: 'operator',
				operators: [ 'is_set', 'is_not_set' ],
			},
            compare: {
                type: 'select',
                route: operator ? 'bb-cl-memberpress/v1/rules' : null ,
				visible: ( [ 'is_set' , 'is_not_set' ].indexOf( operator ) >= 0 ) ,
            },
			named: {
				type: 'text',
				placeholder: 'name for tracking'
			}
		};
	}
});