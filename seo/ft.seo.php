<?php
/**
 * Fieldtype_seo
 * Generates simple meta seo fields (meta description and meta title)
 * @author  Rommert van der Marel <rommert@beeldspraak.com>
 *
 * @copyright  2013
 * @link       http://beeldspraak.com
 */
class Fieldtype_seo extends Fieldtype
{
    /**
     * Meta data for this fieldtype
     * @var array
     */
    public $meta = array(
        'name' => 'Seo',
        'version' => '1.0',
        'author' => 'Rommert van der Marel',
        'author_url' => 'http://beeldspraak.com'
    );


    /**
     * Renders the field
     *
     * @return string
     */
    function render()
    {
        $random_keys = array(
            'seo-title' => Helper::getRandomString(),
            'seo-description' => Helper::getRandomString()
        );

        $values = array(
            'seo-title' => (isset($this->field_data['seo-title'])) ? $this->field_data['seo-title'] : '',
            'seo-description' => (isset($this->field_data['seo-description'])) ? $this->field_data['seo-description'] : ''
        );

        $html = '';

        $html .= '<div class="seo-entry">';
        $html .= '	<div class="seo-data">';
        $html .= '		<p class="seo-title">';
        $html .= Fieldtype::render_fieldtype('text', 'yaml][' . $this->field . '][seo-title', array('display' => 'Meta title'), $values['seo-title'], NULL, NULL, $random_keys['seo-title']);
        $html .= '		</p>';
        $html .= '		<p class="seo-description" id="seo-description">';
        $html .= Fieldtype::render_fieldtype('textarea', 'yaml][' . $this->field . '][seo-description', array('display' => 'Meta description', 'instructions' => 'Recommended characters (150) | <span id="counter"></span>'), $values['seo-description'], NULL, NULL, $random_keys['seo-description']);
        $html .= '		</p>';
        $html .= '	</div>';

        $html .= '</div>';

        return $html;
    }


}
