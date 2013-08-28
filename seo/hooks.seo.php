<?php

class Hooks_seo extends Hooks
{
    /**
     * Adds items to control panel head for publish pages
     *
     * @return string
     */
    public function control_panel__add_to_head()
    {
        if (URL::getCurrent() == '/publish') {
            return $this->css->link('seo.css');
        }
    }


    public function control_panel__add_to_foot()
    {
        if (URL::getCurrent() == '/publish') {
            return $this->js->link(array('jquery.seo.js'));
        }
    }
}



