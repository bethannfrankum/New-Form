<?php namespace JF;
/**

Copyright 2017 JQueryForm.com
License: http://www.jqueryform.com/license.php

FormID:  jqueryform-e582e7
Date:    2017-07-21 12:16:08
Version: v2.0.2
Generated by http://www.jqueryform.com

PHP 5.3+ is required.
If mailgun is used AND the form has file upload field, PHP 5.5+ is required.

*/

class Config {
	private static $config;

    public static function getConfig( $decode = true ){
    	self::$config = self::_getConfig( $decode );
    	self::overwriteConfig();
    	return self::$config;
    }

    private static function _getConfig( $decode = true ){
        ob_start();
        // ---------------------------------------------------------------------
        // JSON format config
        // Note: please make a copy before you edit config manually
        // ---------------------------------------------------------------------

/**JSON_START**/ ?>
{
    "formId": "jqueryform-e78493",
    "email": {
        "to": "bethannfrankum88@gmail.com",
        "cc": "",
        "bcc": "",
        "subject": "",
        "template": ""
    },
    "admin": {
        "users": "admin:73c11",
        "dataDelivery": "emailAndFile"
    },
    "thankyou": {
        "url": "",
        "message": "",
        "seconds": "10"
    },
    "seo": {
        "trackerId": "",
        "title": "",
        "description": "",
        "keywords": "",
        "author": ""
    },
    "mailer": "local",
    "smtp": {
        "host": "",
        "user": "",
        "password": ""
    },
    "mailgun": {
        "domain": "",
        "apiKey": "",
        "fromEmail": "",
        "fromName": ""
    },
    "styles": {
        "iCheck": {
            "enabled": false,
            "skin": "flat",
            "colorScheme": "black"
        },
        "Select2": {
            "enabled": true
        }
    },
    "logics": [

    ],
    "fields": [
        {
            "label": "First Name",
            "field_type": "name",
            "field_options": {
                "size": "small",
                "sender": "firstname",
                "images": {
                    "urls": "",
                    "slideshow": false
                },
                "validators": {
                    "required": {
                        "enabled": true
                    }
                },
                "placeholder": "",
                "addon": {
                    "leftIcon": "glyphicon glyphicon-user"
                }
            },
            "id": "f1",
            "cid": "c1"
        },
        {
            "label": "Last Name",
            "field_type": "name",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "sender": "lastname",
                "validators": {
                    "required": {
                        "enabled": true
                    }
                }
            },
            "id": "f15",
            "cid": "c56"
        },
        {
            "label": "Phone",
            "field_type": "phone",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "sender": false,
                "placeholder": "xxx-xxx-xxxx",
                "addon": {
                    "leftIcon": "glyphicon glyphicon-earphone"
                },
                "validators": {
                    "pattern": {
                        "enabled": false,
                        "val": "[0-9]{3,4}[ -.]*[0-9]{3,4}[ -.]*[0-9]{4}",
                        "msg": "Invalid phone number"
                    },
                    "phonenumber": {
                        "enabled": true
                    },
                    "required": {
                        "enabled": true
                    }
                }
            },
            "phone": {
                "validationMethod": "simple",
                "simpleFormat": "xxx-xxx-xxxx",
                "usePhoneLib": "Y"
            },
            "id": "f7",
            "cid": "c36"
        },
        {
            "label": "Address",
            "field_type": "address",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "validators": {
                    "required": {
                        "enabled": true
                    }
                }
            },
            "labelHide": false,
            "gMapApiKey": "",
            "gaCompleteEnabled": true,
            "gaCountryRestrictions": "",
            "gaPostalCodeRestrictions": "",
            "gaLanguage": "",
            "showLabel": false,
            "showPlaceholder": true,
            "showDescription": false,
            "subfields": {
                "addressLine1": {
                    "order": 1,
                    "label": "Address Line1",
                    "field_options": {
                        "enabled": true,
                        "gAddressTypes": "street_number route",
                        "gAddressName": "long_name",
                        "placeholder": "1234 Main St.",
                        "description": "Street address, P.O. box, company name, c\/o",
                        "validators": {
                            "required": {
                                "enabled": true,
                                "msg": "This field is required."
                            }
                        }
                    }
                },
                "addressLine2": {
                    "order": 2,
                    "label": "Address Line2",
                    "field_options": {
                        "enabled": false,
                        "placeholder": "Unit 1234",
                        "description": "Apartment, suite, unit, building, floor, etc.",
                        "validators": {
                            "required": {
                                "enabled": false,
                                "msg": ""
                            }
                        }
                    }
                },
                "city": {
                    "order": 3,
                    "label": "City",
                    "field_options": {
                        "enabled": true,
                        "gAddressTypes": "locality",
                        "gAddressName": "long_name",
                        "placeholder": "City",
                        "description": "City",
                        "validators": {
                            "required": {
                                "enabled": true,
                                "msg": "This field is required."
                            }
                        }
                    }
                },
                "state": {
                    "order": 4,
                    "label": "State \/ Province \/ Region",
                    "field_options": {
                        "enabled": true,
                        "gAddressTypes": "administrative_area_level_1",
                        "gAddressName": "long_name",
                        "placeholder": "State \/ Province \/ Region",
                        "description": "State \/ Province \/ Region",
                        "validators": {
                            "required": {
                                "enabled": true,
                                "msg": "This field is required."
                            }
                        }
                    }
                },
                "postalCode": {
                    "order": 5,
                    "label": "Postal \/ Zip Code",
                    "field_options": {
                        "enabled": true,
                        "gAddressTypes": "postal_code",
                        "gAddressName": "long_name",
                        "placeholder": "Postal \/ Zip Code",
                        "description": "Postal \/ Zip Code",
                        "validators": {
                            "required": {
                                "enabled": true,
                                "msg": "This field is required."
                            }
                        }
                    }
                },
                "country": {
                    "order": 6,
                    "label": "Country",
                    "field_options": {
                        "enabled": true,
                        "gAddressTypes": "country",
                        "gAddressName": "long_name",
                        "placeholder": "Country",
                        "description": "Country",
                        "validators": {
                            "required": {
                                "enabled": true,
                                "msg": "This field is required."
                            }
                        }
                    }
                }
            },
            "id": "f4",
            "cid": "c29"
        },
        {
            "label": "Email",
            "field_type": "email",
            "field_options": {
                "size": "small",
                "sender": true,
                "images": {
                    "urls": "",
                    "slideshow": false
                },
                "validators": {
                    "email": {
                        "enabled": true
                    },
                    "required": {
                        "enabled": true
                    },
                    "equalto": {
                        "enabled": false,
                        "val": "#f5"
                    }
                },
                "addon": {
                    "leftIcon": "glyphicon glyphicon-envelope",
                    "leftText": ""
                }
            },
            "id": "f2",
            "cid": "c2"
        },
        {
            "label": "Account Type",
            "field_type": "dropdown",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "options": [
                    {
                        "label": "- Select -",
                        "value": "#novalue",
                        "checked": false
                    },
                    {
                        "label": "Vendor",
                        "checked": false
                    },
                    {
                        "label": "Customer",
                        "checked": false
                    },
                    {
                        "label": "Demo",
                        "checked": false
                    }
                ],
                "include_blank_option": false,
                "validators": {
                    "minlength": {
                        "msg": "Please select at least {0} option(s)",
                        "enabled": false
                    },
                    "maxlength": {
                        "msg": "Please select no more than {0} option(s)",
                        "enabled": false
                    },
                    "required": {
                        "enabled": true
                    }
                },
                "presetJson": "",
                "multiple": false
            },
            "id": "f10",
            "cid": "c55"
        },
        {
            "label": "User Name",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "size": "small",
                "addon": {
                    "leftIcon": "fa fa-male"
                },
                "validators": {
                    "required": {
                        "enabled": true
                    },
                    "alphanumeric": {
                        "enabled": true
                    },
                    "min": {
                        "enabled": false,
                        "val": "7"
                    },
                    "max": {
                        "enabled": false,
                        "val": "20"
                    },
                    "minlength": {
                        "enabled": true,
                        "val": "7"
                    },
                    "maxlength": {
                        "enabled": true,
                        "val": "20"
                    },
                    "pattern": {
                        "enabled": false
                    }
                }
            },
            "id": "f11",
            "cid": "c63"
        },
        {
            "label": "Password",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "size": "small",
                "addon": {
                    "leftIcon": "fa fa-lock"
                },
                "validators": {
                    "required": {
                        "enabled": true
                    },
                    "alphanumeric": {
                        "enabled": true
                    },
                    "min": {
                        "enabled": false,
                        "val": "8"
                    },
                    "minlength": {
                        "enabled": true,
                        "val": "8"
                    },
                    "maxlength": {
                        "enabled": true,
                        "val": "21"
                    }
                }
            },
            "id": "f13",
            "cid": "c86"
        },
        {
            "label": "Confirm Password",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "size": "small",
                "addon": [

                ],
                "validators": {
                    "required": {
                        "enabled": true
                    }
                }
            },
            "id": "f14",
            "cid": "c93"
        },
        {
            "label": "Submit Button",
            "field_type": "submit",
            "required": true,
            "field_options": {
                "page": {
                    "title": "Submit",
                    "labelPrev": "< Back",
                    "showPageNumnber": false,
                    "pageNumberText": "{page} \/ {total}"
                },
                "images": {
                    "urls": "",
                    "slideshow": false
                }
            },
            "labelHide": true,
            "submit": {
                "label": "",
                "icon": "",
                "checkRequiredFields": ""
            },
            "id": "f0",
            "cid": "c0"
        }
    ]
}
<?php /**JSON_END**/

        $json = ob_get_clean() ;

        return $decode ? json_decode( trim($json), true ) : $json;
    } // end of getConfig()

    private static function getValue( $fieldId, $default = NULL ){
        return isset( $_POST[$fieldId] ) ? $_POST[$fieldId] : $default ;
    }

    private static function overwriteConfig(){
    	//self::get_to();
    }

    private static function get_to(){
    	$value = self::getValue( 'c25' );
    	$to = array(
    		'Option 1' => 'a@a.com',
    		'Option 2' => 'b@b.com',
    		'Option 3' => 'c@c.com',
    	);

    	if( isset( $to[$value] ) ){
    		self::$config['email']['to'] = $to[ $value ];
    	};
    }

} // end of Config class