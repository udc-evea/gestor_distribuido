<?php

/**
 * Default formatter class for forms
 */
class sfWidgetFormSchemaFormattermpTwitterBootstrap extends sfWidgetFormSchemaFormatter
{
  protected
  $rowFormat			  = "<div class=\"form-group%field_has_error%\">\n  %error%%label%\n  <div class=\"col-sm-10\">%field%%help%\n%hidden_fields%</div>\n</div>",
  $errorRowFormat         = "%errors%", // "<div class=\"alert-message error\">\n%errors%</div>\n",
  $errorListFormatInARow  = "%errors%", // "  <div class=\"alert-message error\">\n%errors% </div>\n",
  $errorRowFormatInARow   = "<span class=\"help-block text-danger\">%error%</span>", // "    <p>%error%</p>\n",
  $helpFormat             = '<span class="help-block">%help%</span>',
  $decoratorFormat        = "<ul class=\"man\">\n  %content%</ul>";
  
  
  protected $validatorSchema;
  
   /**
     * Generates a label for the given field name.
     *
     * @param string $name       The field name
     * @param array  $attributes Optional html attributes for the label tag
     *
     * @return string The label tag
     */
    public function generateLabel($name, $attributes = array())
    {
        $labelName = $this->generateLabelName($name);

        if (false === $labelName) {
            return '';
        }

        if (!isset($attributes['for'])) {
            $attributes['for'] = $this->widgetSchema->generateId($this->widgetSchema->generateName($name));
        }

        if ($this->validatorSchema) {
            $fields = $this->validatorSchema->getFields();
            if (isset($fields[$name]) && $fields[$name] != null) {
                $field = $fields[$name];
                if ($field->hasOption('required') && $field->getOption('required')) {
                    $attributes['class'] = isset($attributes['class']) ? $attributes['class'] : '';
                    $attributes['class'] .= 'input-obligation';
                }
            }
        }

        $attributes['class'] = isset($attributes['class']) ? $attributes['class'].' control-label' : 'col-sm-2 control-label';

        return $this->widgetSchema->renderContentTag('label', $labelName, $attributes);
    }

    public function setValidatorSchema(sfValidatorSchema $validatorSchema)
    {
        $this->validatorSchema = $validatorSchema;
    }
  
  public function formatRow($label, $field, $errors = array(), $help = '', $hiddenFields = null)
  {
    $error_class_in_row = ($errors instanceof sfValidatorError) ? ' has-error' : '';

    return strtr($this->getRowFormat(), array(
                '%field_has_error%' => $error_class_in_row,
                '%label%' => $label,
                '%field%' => $field,
                '%error%' => $this->formatErrorsForRow($errors),
                '%help%' => $this->formatHelp($help),
                '%hidden_fields%' => null === $hiddenFields ? '%hidden_fields%' : $hiddenFields,
            ));
  }
}
