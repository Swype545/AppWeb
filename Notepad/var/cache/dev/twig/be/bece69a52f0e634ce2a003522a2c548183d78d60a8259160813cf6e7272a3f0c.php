<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_a78c9536a80930d1eb34135b236a3b0cf958b2ab537a6fa55063a73928234a99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0c8192b1968b0ddcba4bad9d6d4973002754ba3fe5490503d7a0e0bfc8a0906 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0c8192b1968b0ddcba4bad9d6d4973002754ba3fe5490503d7a0e0bfc8a0906->enter($__internal_a0c8192b1968b0ddcba4bad9d6d4973002754ba3fe5490503d7a0e0bfc8a0906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_b79e9b8697179e3029c7375987ce51c68dff71d7ac76591d5836bb6f3f97362d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b79e9b8697179e3029c7375987ce51c68dff71d7ac76591d5836bb6f3f97362d->enter($__internal_b79e9b8697179e3029c7375987ce51c68dff71d7ac76591d5836bb6f3f97362d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 109
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 113
        echo "
";
        // line 114
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 133
        echo "
";
        // line 134
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 144
        echo "
";
        // line 145
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 155
        echo "
";
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('form_label', $context, $blocks);
        // line 162
        echo "
";
        // line 163
        $this->displayBlock('choice_label', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 172
        echo "
";
        // line 173
        $this->displayBlock('radio_label', $context, $blocks);
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 201
        echo "
";
        // line 203
        echo "
";
        // line 204
        $this->displayBlock('form_row', $context, $blocks);
        // line 211
        echo "
";
        // line 212
        $this->displayBlock('button_row', $context, $blocks);
        // line 217
        echo "
";
        // line 218
        $this->displayBlock('choice_row', $context, $blocks);
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('date_row', $context, $blocks);
        // line 227
        echo "
";
        // line 228
        $this->displayBlock('time_row', $context, $blocks);
        // line 232
        echo "
";
        // line 233
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 237
        echo "
";
        // line 238
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 244
        echo "
";
        // line 245
        $this->displayBlock('radio_row', $context, $blocks);
        // line 251
        echo "
";
        // line 253
        echo "
";
        // line 254
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_a0c8192b1968b0ddcba4bad9d6d4973002754ba3fe5490503d7a0e0bfc8a0906->leave($__internal_a0c8192b1968b0ddcba4bad9d6d4973002754ba3fe5490503d7a0e0bfc8a0906_prof);

        
        $__internal_b79e9b8697179e3029c7375987ce51c68dff71d7ac76591d5836bb6f3f97362d->leave($__internal_b79e9b8697179e3029c7375987ce51c68dff71d7ac76591d5836bb6f3f97362d_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_6f0db66cb90cbbf9ba30e79490c90b36bd396cce44dd48743312a160efbecf6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f0db66cb90cbbf9ba30e79490c90b36bd396cce44dd48743312a160efbecf6d->enter($__internal_6f0db66cb90cbbf9ba30e79490c90b36bd396cce44dd48743312a160efbecf6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_a4a5c41e3722bfbfbc1b4a48e2a4965470e7ee5ac2d7a19863e60e2eb3f8c2d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4a5c41e3722bfbfbc1b4a48e2a4965470e7ee5ac2d7a19863e60e2eb3f8c2d7->enter($__internal_a4a5c41e3722bfbfbc1b4a48e2a4965470e7ee5ac2d7a19863e60e2eb3f8c2d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_a4a5c41e3722bfbfbc1b4a48e2a4965470e7ee5ac2d7a19863e60e2eb3f8c2d7->leave($__internal_a4a5c41e3722bfbfbc1b4a48e2a4965470e7ee5ac2d7a19863e60e2eb3f8c2d7_prof);

        
        $__internal_6f0db66cb90cbbf9ba30e79490c90b36bd396cce44dd48743312a160efbecf6d->leave($__internal_6f0db66cb90cbbf9ba30e79490c90b36bd396cce44dd48743312a160efbecf6d_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_63ebd61a985ca4e86c907c2ce50b1218dd37404726e66e540b91872914688498 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63ebd61a985ca4e86c907c2ce50b1218dd37404726e66e540b91872914688498->enter($__internal_63ebd61a985ca4e86c907c2ce50b1218dd37404726e66e540b91872914688498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_e955cbf55c2bb5fa71469881e4431d6a919d482feeae5e8ea52c8d880405ff28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e955cbf55c2bb5fa71469881e4431d6a919d482feeae5e8ea52c8d880405ff28->enter($__internal_e955cbf55c2bb5fa71469881e4431d6a919d482feeae5e8ea52c8d880405ff28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_e955cbf55c2bb5fa71469881e4431d6a919d482feeae5e8ea52c8d880405ff28->leave($__internal_e955cbf55c2bb5fa71469881e4431d6a919d482feeae5e8ea52c8d880405ff28_prof);

        
        $__internal_63ebd61a985ca4e86c907c2ce50b1218dd37404726e66e540b91872914688498->leave($__internal_63ebd61a985ca4e86c907c2ce50b1218dd37404726e66e540b91872914688498_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_f6d6bd626db48879660120b7c2bedf33fb6dd0e09956665538beb1eb8ce4a0e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6d6bd626db48879660120b7c2bedf33fb6dd0e09956665538beb1eb8ce4a0e6->enter($__internal_f6d6bd626db48879660120b7c2bedf33fb6dd0e09956665538beb1eb8ce4a0e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_1630d91523c9b682b01898eddefcc1e4780d821987da19340f9555f1ff1dfe68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1630d91523c9b682b01898eddefcc1e4780d821987da19340f9555f1ff1dfe68->enter($__internal_1630d91523c9b682b01898eddefcc1e4780d821987da19340f9555f1ff1dfe68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_1630d91523c9b682b01898eddefcc1e4780d821987da19340f9555f1ff1dfe68->leave($__internal_1630d91523c9b682b01898eddefcc1e4780d821987da19340f9555f1ff1dfe68_prof);

        
        $__internal_f6d6bd626db48879660120b7c2bedf33fb6dd0e09956665538beb1eb8ce4a0e6->leave($__internal_f6d6bd626db48879660120b7c2bedf33fb6dd0e09956665538beb1eb8ce4a0e6_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_260d2d674d8f3168de0b92955404eae708275179000e5fafacc472b7d460a11c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_260d2d674d8f3168de0b92955404eae708275179000e5fafacc472b7d460a11c->enter($__internal_260d2d674d8f3168de0b92955404eae708275179000e5fafacc472b7d460a11c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_1e452f5536f8ac9a6e04285d6fbe8ef2c1905c2990a29e152a8bd34c5d75d531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e452f5536f8ac9a6e04285d6fbe8ef2c1905c2990a29e152a8bd34c5d75d531->enter($__internal_1e452f5536f8ac9a6e04285d6fbe8ef2c1905c2990a29e152a8bd34c5d75d531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_30b2bdb595ff4d1d505485f0ec2a99bc71448244cc792ba9f541daa4ced52563 = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_2838de99e69c4e56af9b592938c13beaef6bfabfec424242409203254e25d109 = "{{") && ('' === $__internal_2838de99e69c4e56af9b592938c13beaef6bfabfec424242409203254e25d109 || 0 === strpos($__internal_30b2bdb595ff4d1d505485f0ec2a99bc71448244cc792ba9f541daa4ced52563, $__internal_2838de99e69c4e56af9b592938c13beaef6bfabfec424242409203254e25d109)));
        // line 25
        echo "        ";
        if ( !(isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if ((isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_1e452f5536f8ac9a6e04285d6fbe8ef2c1905c2990a29e152a8bd34c5d75d531->leave($__internal_1e452f5536f8ac9a6e04285d6fbe8ef2c1905c2990a29e152a8bd34c5d75d531_prof);

        
        $__internal_260d2d674d8f3168de0b92955404eae708275179000e5fafacc472b7d460a11c->leave($__internal_260d2d674d8f3168de0b92955404eae708275179000e5fafacc472b7d460a11c_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_026bf71b065f28321ec261b0172e95929fbc3f6fa1ec8727a0351204fd0e54f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_026bf71b065f28321ec261b0172e95929fbc3f6fa1ec8727a0351204fd0e54f2->enter($__internal_026bf71b065f28321ec261b0172e95929fbc3f6fa1ec8727a0351204fd0e54f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_b5742126c1c8584a421ccbf3a340bb21a2a90b83f72b94e3985bc7add9f2fe54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5742126c1c8584a421ccbf3a340bb21a2a90b83f72b94e3985bc7add9f2fe54->enter($__internal_b5742126c1c8584a421ccbf3a340bb21a2a90b83f72b94e3985bc7add9f2fe54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_b5742126c1c8584a421ccbf3a340bb21a2a90b83f72b94e3985bc7add9f2fe54->leave($__internal_b5742126c1c8584a421ccbf3a340bb21a2a90b83f72b94e3985bc7add9f2fe54_prof);

        
        $__internal_026bf71b065f28321ec261b0172e95929fbc3f6fa1ec8727a0351204fd0e54f2->leave($__internal_026bf71b065f28321ec261b0172e95929fbc3f6fa1ec8727a0351204fd0e54f2_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_ac364c1ed6ca225c2b1ac77fe2554952b5925d59cb4a43359c455421aec03da4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac364c1ed6ca225c2b1ac77fe2554952b5925d59cb4a43359c455421aec03da4->enter($__internal_ac364c1ed6ca225c2b1ac77fe2554952b5925d59cb4a43359c455421aec03da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_3476656feb31da7e2805cda6ca583394827c0b38e8863e5fda221ce759e64dcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3476656feb31da7e2805cda6ca583394827c0b38e8863e5fda221ce759e64dcd->enter($__internal_3476656feb31da7e2805cda6ca583394827c0b38e8863e5fda221ce759e64dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_3476656feb31da7e2805cda6ca583394827c0b38e8863e5fda221ce759e64dcd->leave($__internal_3476656feb31da7e2805cda6ca583394827c0b38e8863e5fda221ce759e64dcd_prof);

        
        $__internal_ac364c1ed6ca225c2b1ac77fe2554952b5925d59cb4a43359c455421aec03da4->leave($__internal_ac364c1ed6ca225c2b1ac77fe2554952b5925d59cb4a43359c455421aec03da4_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_1e8bf39c2db9c6beecfd7edca996dacb80be20ed0e1aad222e8af5107d47422d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e8bf39c2db9c6beecfd7edca996dacb80be20ed0e1aad222e8af5107d47422d->enter($__internal_1e8bf39c2db9c6beecfd7edca996dacb80be20ed0e1aad222e8af5107d47422d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_843fe386eb98d5eb9fe4291e69b13422f244c1f049ee2aacc7905ecd94eed253 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_843fe386eb98d5eb9fe4291e69b13422f244c1f049ee2aacc7905ecd94eed253->enter($__internal_843fe386eb98d5eb9fe4291e69b13422f244c1f049ee2aacc7905ecd94eed253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_843fe386eb98d5eb9fe4291e69b13422f244c1f049ee2aacc7905ecd94eed253->leave($__internal_843fe386eb98d5eb9fe4291e69b13422f244c1f049ee2aacc7905ecd94eed253_prof);

        
        $__internal_1e8bf39c2db9c6beecfd7edca996dacb80be20ed0e1aad222e8af5107d47422d->leave($__internal_1e8bf39c2db9c6beecfd7edca996dacb80be20ed0e1aad222e8af5107d47422d_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_ed6fbf1a5b120c885cd0aba37758a60c3ddad406eebbabb6476dca3ec8f7df39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed6fbf1a5b120c885cd0aba37758a60c3ddad406eebbabb6476dca3ec8f7df39->enter($__internal_ed6fbf1a5b120c885cd0aba37758a60c3ddad406eebbabb6476dca3ec8f7df39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_c7fea692f07f1fee6864a66230d91ead901a37aad81375ad79151f18c0964931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7fea692f07f1fee6864a66230d91ead901a37aad81375ad79151f18c0964931->enter($__internal_c7fea692f07f1fee6864a66230d91ead901a37aad81375ad79151f18c0964931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_c7fea692f07f1fee6864a66230d91ead901a37aad81375ad79151f18c0964931->leave($__internal_c7fea692f07f1fee6864a66230d91ead901a37aad81375ad79151f18c0964931_prof);

        
        $__internal_ed6fbf1a5b120c885cd0aba37758a60c3ddad406eebbabb6476dca3ec8f7df39->leave($__internal_ed6fbf1a5b120c885cd0aba37758a60c3ddad406eebbabb6476dca3ec8f7df39_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_de6b4b6a4afbca652e749d713d736bfdc00fb042d58ecc1656afc2fff0c02d5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de6b4b6a4afbca652e749d713d736bfdc00fb042d58ecc1656afc2fff0c02d5a->enter($__internal_de6b4b6a4afbca652e749d713d736bfdc00fb042d58ecc1656afc2fff0c02d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_40766c9a2a0985c5f6657acd1fb60ac00db41d9a797265cf43a3aa350e99487a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40766c9a2a0985c5f6657acd1fb60ac00db41d9a797265cf43a3aa350e99487a->enter($__internal_40766c9a2a0985c5f6657acd1fb60ac00db41d9a797265cf43a3aa350e99487a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            // line 97
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'widget');
            }
            // line 98
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'widget');
            }
            // line 99
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'widget');
            }
            // line 100
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'widget');
            }
            // line 101
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'widget');
            }
            // line 102
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'widget');
            }
            // line 103
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'widget');
            }
            // line 104
            if ((isset($context["with_invert"]) ? $context["with_invert"] : $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 105
            echo "</div>";
        }
        
        $__internal_40766c9a2a0985c5f6657acd1fb60ac00db41d9a797265cf43a3aa350e99487a->leave($__internal_40766c9a2a0985c5f6657acd1fb60ac00db41d9a797265cf43a3aa350e99487a_prof);

        
        $__internal_de6b4b6a4afbca652e749d713d736bfdc00fb042d58ecc1656afc2fff0c02d5a->leave($__internal_de6b4b6a4afbca652e749d713d736bfdc00fb042d58ecc1656afc2fff0c02d5a_prof);

    }

    // line 109
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_c631962b991a79f0835a23da7f107a1188c8114bc591c755401d88d5c4e2283f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c631962b991a79f0835a23da7f107a1188c8114bc591c755401d88d5c4e2283f->enter($__internal_c631962b991a79f0835a23da7f107a1188c8114bc591c755401d88d5c4e2283f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_a8cdd681d0ec5af061aac03167c6faee046bf714ea4c73c1ce59ee314d3cb984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8cdd681d0ec5af061aac03167c6faee046bf714ea4c73c1ce59ee314d3cb984->enter($__internal_a8cdd681d0ec5af061aac03167c6faee046bf714ea4c73c1ce59ee314d3cb984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 110
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 111
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_a8cdd681d0ec5af061aac03167c6faee046bf714ea4c73c1ce59ee314d3cb984->leave($__internal_a8cdd681d0ec5af061aac03167c6faee046bf714ea4c73c1ce59ee314d3cb984_prof);

        
        $__internal_c631962b991a79f0835a23da7f107a1188c8114bc591c755401d88d5c4e2283f->leave($__internal_c631962b991a79f0835a23da7f107a1188c8114bc591c755401d88d5c4e2283f_prof);

    }

    // line 114
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_6240a04f699ee5766da40e68277ae1355a756cec1989dcc6af363ea491733182 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6240a04f699ee5766da40e68277ae1355a756cec1989dcc6af363ea491733182->enter($__internal_6240a04f699ee5766da40e68277ae1355a756cec1989dcc6af363ea491733182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_f15fde892a5fa213303b6ec95b28fd78d2883060c8ed3d3986499cba7fd67238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f15fde892a5fa213303b6ec95b28fd78d2883060c8ed3d3986499cba7fd67238->enter($__internal_f15fde892a5fa213303b6ec95b28fd78d2883060c8ed3d3986499cba7fd67238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 115
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 117
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 118
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 119
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 123
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 124
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 125
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 126
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 127
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "</div>";
        }
        
        $__internal_f15fde892a5fa213303b6ec95b28fd78d2883060c8ed3d3986499cba7fd67238->leave($__internal_f15fde892a5fa213303b6ec95b28fd78d2883060c8ed3d3986499cba7fd67238_prof);

        
        $__internal_6240a04f699ee5766da40e68277ae1355a756cec1989dcc6af363ea491733182->leave($__internal_6240a04f699ee5766da40e68277ae1355a756cec1989dcc6af363ea491733182_prof);

    }

    // line 134
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_9f9519ec32834ad230fec78efebb8808e3b0e363cd72acd3d5c7e3b9294457a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f9519ec32834ad230fec78efebb8808e3b0e363cd72acd3d5c7e3b9294457a2->enter($__internal_9f9519ec32834ad230fec78efebb8808e3b0e363cd72acd3d5c7e3b9294457a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_86a05d156d073ced2c4a561077e0c2ef5071f41ebc4ba8711b88a959a1f447eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86a05d156d073ced2c4a561077e0c2ef5071f41ebc4ba8711b88a959a1f447eb->enter($__internal_86a05d156d073ced2c4a561077e0c2ef5071f41ebc4ba8711b88a959a1f447eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 135
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 136
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 137
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 139
            echo "<div class=\"checkbox\">";
            // line 140
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 141
            echo "</div>";
        }
        
        $__internal_86a05d156d073ced2c4a561077e0c2ef5071f41ebc4ba8711b88a959a1f447eb->leave($__internal_86a05d156d073ced2c4a561077e0c2ef5071f41ebc4ba8711b88a959a1f447eb_prof);

        
        $__internal_9f9519ec32834ad230fec78efebb8808e3b0e363cd72acd3d5c7e3b9294457a2->leave($__internal_9f9519ec32834ad230fec78efebb8808e3b0e363cd72acd3d5c7e3b9294457a2_prof);

    }

    // line 145
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_a6ce9c5e6b05dc883435b70431aae98265f7c373f09f7ffa97490009a6304ac9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6ce9c5e6b05dc883435b70431aae98265f7c373f09f7ffa97490009a6304ac9->enter($__internal_a6ce9c5e6b05dc883435b70431aae98265f7c373f09f7ffa97490009a6304ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_48063ecdeddef38639d590260b34eefc37c0fc0db935df7354500c1353189091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48063ecdeddef38639d590260b34eefc37c0fc0db935df7354500c1353189091->enter($__internal_48063ecdeddef38639d590260b34eefc37c0fc0db935df7354500c1353189091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 146
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 147
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 148
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 150
            echo "<div class=\"radio\">";
            // line 151
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 152
            echo "</div>";
        }
        
        $__internal_48063ecdeddef38639d590260b34eefc37c0fc0db935df7354500c1353189091->leave($__internal_48063ecdeddef38639d590260b34eefc37c0fc0db935df7354500c1353189091_prof);

        
        $__internal_a6ce9c5e6b05dc883435b70431aae98265f7c373f09f7ffa97490009a6304ac9->leave($__internal_a6ce9c5e6b05dc883435b70431aae98265f7c373f09f7ffa97490009a6304ac9_prof);

    }

    // line 158
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_be914783a971dd7dd9620072d5dacb5923454a7796a4d5b19f7b359561e6a915 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be914783a971dd7dd9620072d5dacb5923454a7796a4d5b19f7b359561e6a915->enter($__internal_be914783a971dd7dd9620072d5dacb5923454a7796a4d5b19f7b359561e6a915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_4a18cdc7b69a00fb0eed600e4a4fa0b5462739dd29ea7b442ce0720cbd360302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a18cdc7b69a00fb0eed600e4a4fa0b5462739dd29ea7b442ce0720cbd360302->enter($__internal_4a18cdc7b69a00fb0eed600e4a4fa0b5462739dd29ea7b442ce0720cbd360302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 159
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 160
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_4a18cdc7b69a00fb0eed600e4a4fa0b5462739dd29ea7b442ce0720cbd360302->leave($__internal_4a18cdc7b69a00fb0eed600e4a4fa0b5462739dd29ea7b442ce0720cbd360302_prof);

        
        $__internal_be914783a971dd7dd9620072d5dacb5923454a7796a4d5b19f7b359561e6a915->leave($__internal_be914783a971dd7dd9620072d5dacb5923454a7796a4d5b19f7b359561e6a915_prof);

    }

    // line 163
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_4e71a8ee0d2ce09811ff40c445c8d1de8c838676bef679513d970147e5009974 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e71a8ee0d2ce09811ff40c445c8d1de8c838676bef679513d970147e5009974->enter($__internal_4e71a8ee0d2ce09811ff40c445c8d1de8c838676bef679513d970147e5009974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_89e2ddc7c514c2cc27a9e6326fe12bde4178a88531856a3a412f981dee4b8ddf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89e2ddc7c514c2cc27a9e6326fe12bde4178a88531856a3a412f981dee4b8ddf->enter($__internal_89e2ddc7c514c2cc27a9e6326fe12bde4178a88531856a3a412f981dee4b8ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 165
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 166
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_89e2ddc7c514c2cc27a9e6326fe12bde4178a88531856a3a412f981dee4b8ddf->leave($__internal_89e2ddc7c514c2cc27a9e6326fe12bde4178a88531856a3a412f981dee4b8ddf_prof);

        
        $__internal_4e71a8ee0d2ce09811ff40c445c8d1de8c838676bef679513d970147e5009974->leave($__internal_4e71a8ee0d2ce09811ff40c445c8d1de8c838676bef679513d970147e5009974_prof);

    }

    // line 169
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_97ab0cec45587f15b2b41d234a51279f57a9445c6b04f8f84d423c6b5d2a064b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97ab0cec45587f15b2b41d234a51279f57a9445c6b04f8f84d423c6b5d2a064b->enter($__internal_97ab0cec45587f15b2b41d234a51279f57a9445c6b04f8f84d423c6b5d2a064b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_690b7475fe8cd30dd351fa5fd44dde6c61a785ef7c265c71ce2e91a0aeb8ef70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_690b7475fe8cd30dd351fa5fd44dde6c61a785ef7c265c71ce2e91a0aeb8ef70->enter($__internal_690b7475fe8cd30dd351fa5fd44dde6c61a785ef7c265c71ce2e91a0aeb8ef70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 170
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_690b7475fe8cd30dd351fa5fd44dde6c61a785ef7c265c71ce2e91a0aeb8ef70->leave($__internal_690b7475fe8cd30dd351fa5fd44dde6c61a785ef7c265c71ce2e91a0aeb8ef70_prof);

        
        $__internal_97ab0cec45587f15b2b41d234a51279f57a9445c6b04f8f84d423c6b5d2a064b->leave($__internal_97ab0cec45587f15b2b41d234a51279f57a9445c6b04f8f84d423c6b5d2a064b_prof);

    }

    // line 173
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_441d26a4a2996ee8b55c73be092afb7610331527bdd37a054fadd313579695c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_441d26a4a2996ee8b55c73be092afb7610331527bdd37a054fadd313579695c1->enter($__internal_441d26a4a2996ee8b55c73be092afb7610331527bdd37a054fadd313579695c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_b825e48cb1e17e77fa03fb22cfeee7125b79fbb61694cb051c9ec5fa0deb1b18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b825e48cb1e17e77fa03fb22cfeee7125b79fbb61694cb051c9ec5fa0deb1b18->enter($__internal_b825e48cb1e17e77fa03fb22cfeee7125b79fbb61694cb051c9ec5fa0deb1b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 174
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_b825e48cb1e17e77fa03fb22cfeee7125b79fbb61694cb051c9ec5fa0deb1b18->leave($__internal_b825e48cb1e17e77fa03fb22cfeee7125b79fbb61694cb051c9ec5fa0deb1b18_prof);

        
        $__internal_441d26a4a2996ee8b55c73be092afb7610331527bdd37a054fadd313579695c1->leave($__internal_441d26a4a2996ee8b55c73be092afb7610331527bdd37a054fadd313579695c1_prof);

    }

    // line 177
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_99c40b4ab55287a21ac7b1c5e234ca69f898ac046f6ff3c6a6ab0806c4016830 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99c40b4ab55287a21ac7b1c5e234ca69f898ac046f6ff3c6a6ab0806c4016830->enter($__internal_99c40b4ab55287a21ac7b1c5e234ca69f898ac046f6ff3c6a6ab0806c4016830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_aece69ecc1b91c0b1804bcff10f1be10d1bcc90a888a61616bba76bd54dc2c66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aece69ecc1b91c0b1804bcff10f1be10d1bcc90a888a61616bba76bd54dc2c66->enter($__internal_aece69ecc1b91c0b1804bcff10f1be10d1bcc90a888a61616bba76bd54dc2c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 178
        echo "    ";
        // line 179
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 180
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 181
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 182
                echo "        ";
            }
            // line 183
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 184
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 185
                echo "        ";
            }
            // line 186
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 187
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 188
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 189
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 190
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 193
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 196
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 197
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 198
            echo "</label>
    ";
        }
        
        $__internal_aece69ecc1b91c0b1804bcff10f1be10d1bcc90a888a61616bba76bd54dc2c66->leave($__internal_aece69ecc1b91c0b1804bcff10f1be10d1bcc90a888a61616bba76bd54dc2c66_prof);

        
        $__internal_99c40b4ab55287a21ac7b1c5e234ca69f898ac046f6ff3c6a6ab0806c4016830->leave($__internal_99c40b4ab55287a21ac7b1c5e234ca69f898ac046f6ff3c6a6ab0806c4016830_prof);

    }

    // line 204
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_9a0e4ae0f2fdb6a84a3448cd99c7ab275fa1516a7fbe11a32c84071eb84e353b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a0e4ae0f2fdb6a84a3448cd99c7ab275fa1516a7fbe11a32c84071eb84e353b->enter($__internal_9a0e4ae0f2fdb6a84a3448cd99c7ab275fa1516a7fbe11a32c84071eb84e353b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_c4892f18f997d53bcadfe20d5e7c7b7e0911c83d08fcea98b34c1d712482295f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4892f18f997d53bcadfe20d5e7c7b7e0911c83d08fcea98b34c1d712482295f->enter($__internal_c4892f18f997d53bcadfe20d5e7c7b7e0911c83d08fcea98b34c1d712482295f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 205
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 206
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 207
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 208
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 209
        echo "</div>";
        
        $__internal_c4892f18f997d53bcadfe20d5e7c7b7e0911c83d08fcea98b34c1d712482295f->leave($__internal_c4892f18f997d53bcadfe20d5e7c7b7e0911c83d08fcea98b34c1d712482295f_prof);

        
        $__internal_9a0e4ae0f2fdb6a84a3448cd99c7ab275fa1516a7fbe11a32c84071eb84e353b->leave($__internal_9a0e4ae0f2fdb6a84a3448cd99c7ab275fa1516a7fbe11a32c84071eb84e353b_prof);

    }

    // line 212
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_e30770050c4ddaf5323326cda72e324437f2f417cb397682fdd6876af1dbfc3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e30770050c4ddaf5323326cda72e324437f2f417cb397682fdd6876af1dbfc3f->enter($__internal_e30770050c4ddaf5323326cda72e324437f2f417cb397682fdd6876af1dbfc3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_4fa571de45e2bdd7c014c29ad0780a0120f2277d2f8d18e8fe4c9119237a461b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fa571de45e2bdd7c014c29ad0780a0120f2277d2f8d18e8fe4c9119237a461b->enter($__internal_4fa571de45e2bdd7c014c29ad0780a0120f2277d2f8d18e8fe4c9119237a461b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 213
        echo "<div class=\"form-group\">";
        // line 214
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 215
        echo "</div>";
        
        $__internal_4fa571de45e2bdd7c014c29ad0780a0120f2277d2f8d18e8fe4c9119237a461b->leave($__internal_4fa571de45e2bdd7c014c29ad0780a0120f2277d2f8d18e8fe4c9119237a461b_prof);

        
        $__internal_e30770050c4ddaf5323326cda72e324437f2f417cb397682fdd6876af1dbfc3f->leave($__internal_e30770050c4ddaf5323326cda72e324437f2f417cb397682fdd6876af1dbfc3f_prof);

    }

    // line 218
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_56bc1bb2392023a92187e62c540920d074b02fb14cac1ff486d14f323daf5c7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56bc1bb2392023a92187e62c540920d074b02fb14cac1ff486d14f323daf5c7b->enter($__internal_56bc1bb2392023a92187e62c540920d074b02fb14cac1ff486d14f323daf5c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_8b6f6759fd2476c933beaf3e8a7a056915ba09203a7a753c7f00e8c40d6a7e09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b6f6759fd2476c933beaf3e8a7a056915ba09203a7a753c7f00e8c40d6a7e09->enter($__internal_8b6f6759fd2476c933beaf3e8a7a056915ba09203a7a753c7f00e8c40d6a7e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 219
        $context["force_error"] = true;
        // line 220
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8b6f6759fd2476c933beaf3e8a7a056915ba09203a7a753c7f00e8c40d6a7e09->leave($__internal_8b6f6759fd2476c933beaf3e8a7a056915ba09203a7a753c7f00e8c40d6a7e09_prof);

        
        $__internal_56bc1bb2392023a92187e62c540920d074b02fb14cac1ff486d14f323daf5c7b->leave($__internal_56bc1bb2392023a92187e62c540920d074b02fb14cac1ff486d14f323daf5c7b_prof);

    }

    // line 223
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_7c0107888bf0443dd7704feb04edd6c88390e77f0da11c53eb0e4f984a8e070e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c0107888bf0443dd7704feb04edd6c88390e77f0da11c53eb0e4f984a8e070e->enter($__internal_7c0107888bf0443dd7704feb04edd6c88390e77f0da11c53eb0e4f984a8e070e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_1b6b5455116792f3da734130db542a308c02b3966b92e62d07ba31996ebcc628 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b6b5455116792f3da734130db542a308c02b3966b92e62d07ba31996ebcc628->enter($__internal_1b6b5455116792f3da734130db542a308c02b3966b92e62d07ba31996ebcc628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 224
        $context["force_error"] = true;
        // line 225
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1b6b5455116792f3da734130db542a308c02b3966b92e62d07ba31996ebcc628->leave($__internal_1b6b5455116792f3da734130db542a308c02b3966b92e62d07ba31996ebcc628_prof);

        
        $__internal_7c0107888bf0443dd7704feb04edd6c88390e77f0da11c53eb0e4f984a8e070e->leave($__internal_7c0107888bf0443dd7704feb04edd6c88390e77f0da11c53eb0e4f984a8e070e_prof);

    }

    // line 228
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_7a1fca16502ee570048a042e58a38b4002c15f03413bd60b8b4abc7bbc364772 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a1fca16502ee570048a042e58a38b4002c15f03413bd60b8b4abc7bbc364772->enter($__internal_7a1fca16502ee570048a042e58a38b4002c15f03413bd60b8b4abc7bbc364772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_1b99be51f57f3645e5c4dda9f9029169b26fbfcfe71691a4fff27051e619181d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b99be51f57f3645e5c4dda9f9029169b26fbfcfe71691a4fff27051e619181d->enter($__internal_1b99be51f57f3645e5c4dda9f9029169b26fbfcfe71691a4fff27051e619181d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 229
        $context["force_error"] = true;
        // line 230
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1b99be51f57f3645e5c4dda9f9029169b26fbfcfe71691a4fff27051e619181d->leave($__internal_1b99be51f57f3645e5c4dda9f9029169b26fbfcfe71691a4fff27051e619181d_prof);

        
        $__internal_7a1fca16502ee570048a042e58a38b4002c15f03413bd60b8b4abc7bbc364772->leave($__internal_7a1fca16502ee570048a042e58a38b4002c15f03413bd60b8b4abc7bbc364772_prof);

    }

    // line 233
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_c2838bbaa81d0e70d6e3a5c2fa587cb9e13b74480825d2d587b7a5e51b12229f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2838bbaa81d0e70d6e3a5c2fa587cb9e13b74480825d2d587b7a5e51b12229f->enter($__internal_c2838bbaa81d0e70d6e3a5c2fa587cb9e13b74480825d2d587b7a5e51b12229f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_23c5d86e622151e2d23250f9b9975f7ee424563358e9d0244de306d36742d71b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23c5d86e622151e2d23250f9b9975f7ee424563358e9d0244de306d36742d71b->enter($__internal_23c5d86e622151e2d23250f9b9975f7ee424563358e9d0244de306d36742d71b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 234
        $context["force_error"] = true;
        // line 235
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_23c5d86e622151e2d23250f9b9975f7ee424563358e9d0244de306d36742d71b->leave($__internal_23c5d86e622151e2d23250f9b9975f7ee424563358e9d0244de306d36742d71b_prof);

        
        $__internal_c2838bbaa81d0e70d6e3a5c2fa587cb9e13b74480825d2d587b7a5e51b12229f->leave($__internal_c2838bbaa81d0e70d6e3a5c2fa587cb9e13b74480825d2d587b7a5e51b12229f_prof);

    }

    // line 238
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_9848a1c34d715257e2143f32305ac9f615601e619c9140d7d621e6841c25d0f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9848a1c34d715257e2143f32305ac9f615601e619c9140d7d621e6841c25d0f6->enter($__internal_9848a1c34d715257e2143f32305ac9f615601e619c9140d7d621e6841c25d0f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_c371eb06781b3c742cc726870a61fbe540db87370a8114a3c1a645c15f01b9d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c371eb06781b3c742cc726870a61fbe540db87370a8114a3c1a645c15f01b9d8->enter($__internal_c371eb06781b3c742cc726870a61fbe540db87370a8114a3c1a645c15f01b9d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 239
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 240
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 241
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 242
        echo "</div>";
        
        $__internal_c371eb06781b3c742cc726870a61fbe540db87370a8114a3c1a645c15f01b9d8->leave($__internal_c371eb06781b3c742cc726870a61fbe540db87370a8114a3c1a645c15f01b9d8_prof);

        
        $__internal_9848a1c34d715257e2143f32305ac9f615601e619c9140d7d621e6841c25d0f6->leave($__internal_9848a1c34d715257e2143f32305ac9f615601e619c9140d7d621e6841c25d0f6_prof);

    }

    // line 245
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_aef202bc37337c3b33835852b7a9f7250bea5cad08d6a5c063160f1d2701f40e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aef202bc37337c3b33835852b7a9f7250bea5cad08d6a5c063160f1d2701f40e->enter($__internal_aef202bc37337c3b33835852b7a9f7250bea5cad08d6a5c063160f1d2701f40e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_6002a8727617b65f0a17bea7caecc5910159bcd177c56bb5a2c942e11c3f3887 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6002a8727617b65f0a17bea7caecc5910159bcd177c56bb5a2c942e11c3f3887->enter($__internal_6002a8727617b65f0a17bea7caecc5910159bcd177c56bb5a2c942e11c3f3887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 246
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 247
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 248
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 249
        echo "</div>";
        
        $__internal_6002a8727617b65f0a17bea7caecc5910159bcd177c56bb5a2c942e11c3f3887->leave($__internal_6002a8727617b65f0a17bea7caecc5910159bcd177c56bb5a2c942e11c3f3887_prof);

        
        $__internal_aef202bc37337c3b33835852b7a9f7250bea5cad08d6a5c063160f1d2701f40e->leave($__internal_aef202bc37337c3b33835852b7a9f7250bea5cad08d6a5c063160f1d2701f40e_prof);

    }

    // line 254
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_85b20ce9691a48c1fe8a097f8adcce0cf88d33b4ab6a3b058791fbab88d995ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85b20ce9691a48c1fe8a097f8adcce0cf88d33b4ab6a3b058791fbab88d995ee->enter($__internal_85b20ce9691a48c1fe8a097f8adcce0cf88d33b4ab6a3b058791fbab88d995ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_ee4435817135515db3c70bca95c2a9287fb14d09c6f0d935d6aedd9850d7c11a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee4435817135515db3c70bca95c2a9287fb14d09c6f0d935d6aedd9850d7c11a->enter($__internal_ee4435817135515db3c70bca95c2a9287fb14d09c6f0d935d6aedd9850d7c11a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 255
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 256
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 257
            echo "    <ul class=\"list-unstyled\">";
            // line 258
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 259
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 261
            echo "</ul>
    ";
            // line 262
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_ee4435817135515db3c70bca95c2a9287fb14d09c6f0d935d6aedd9850d7c11a->leave($__internal_ee4435817135515db3c70bca95c2a9287fb14d09c6f0d935d6aedd9850d7c11a_prof);

        
        $__internal_85b20ce9691a48c1fe8a097f8adcce0cf88d33b4ab6a3b058791fbab88d995ee->leave($__internal_85b20ce9691a48c1fe8a097f8adcce0cf88d33b4ab6a3b058791fbab88d995ee_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1061 => 262,  1058 => 261,  1050 => 259,  1046 => 258,  1044 => 257,  1038 => 256,  1036 => 255,  1027 => 254,  1017 => 249,  1015 => 248,  1013 => 247,  1007 => 246,  998 => 245,  988 => 242,  986 => 241,  984 => 240,  978 => 239,  969 => 238,  959 => 235,  957 => 234,  948 => 233,  938 => 230,  936 => 229,  927 => 228,  917 => 225,  915 => 224,  906 => 223,  896 => 220,  894 => 219,  885 => 218,  875 => 215,  873 => 214,  871 => 213,  862 => 212,  852 => 209,  850 => 208,  848 => 207,  846 => 206,  840 => 205,  831 => 204,  819 => 198,  815 => 197,  800 => 196,  796 => 193,  793 => 190,  792 => 189,  791 => 188,  789 => 187,  786 => 186,  783 => 185,  780 => 184,  777 => 183,  774 => 182,  771 => 181,  768 => 180,  765 => 179,  763 => 178,  754 => 177,  744 => 174,  735 => 173,  725 => 170,  716 => 169,  706 => 166,  704 => 165,  695 => 163,  685 => 160,  683 => 159,  674 => 158,  663 => 152,  661 => 151,  659 => 150,  656 => 148,  654 => 147,  652 => 146,  643 => 145,  632 => 141,  630 => 140,  628 => 139,  625 => 137,  623 => 136,  621 => 135,  612 => 134,  601 => 130,  595 => 127,  594 => 126,  593 => 125,  589 => 124,  585 => 123,  578 => 119,  577 => 118,  576 => 117,  572 => 116,  570 => 115,  561 => 114,  551 => 111,  549 => 110,  540 => 109,  529 => 105,  525 => 104,  521 => 103,  517 => 102,  513 => 101,  509 => 100,  505 => 99,  501 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 254,  200 => 253,  197 => 251,  195 => 245,  192 => 244,  190 => 238,  187 => 237,  185 => 233,  182 => 232,  180 => 228,  177 => 227,  175 => 223,  172 => 222,  170 => 218,  167 => 217,  165 => 212,  162 => 211,  160 => 204,  157 => 203,  154 => 201,  152 => 177,  149 => 176,  147 => 173,  144 => 172,  142 => 169,  139 => 168,  137 => 163,  134 => 162,  132 => 158,  129 => 157,  126 => 155,  124 => 145,  121 => 144,  119 => 134,  116 => 133,  114 => 114,  111 => 113,  109 => 109,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            {%- if with_years %}{{ form_widget(form.years) }}{% endif -%}
            {%- if with_months %}{{ form_widget(form.months) }}{% endif -%}
            {%- if with_weeks %}{{ form_widget(form.weeks) }}{% endif -%}
            {%- if with_days %}{{ form_widget(form.days) }}{% endif -%}
            {%- if with_hours %}{{ form_widget(form.hours) }}{% endif -%}
            {%- if with_minutes %}{{ form_widget(form.minutes) }}{% endif -%}
            {%- if with_seconds %}{{ form_widget(form.seconds) }}{% endif -%}
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "C:\\wamp64\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
