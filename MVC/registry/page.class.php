<?php
  /**
   * Page object
   * @author Salim Djerbouh
   * @version 0.1
   */
  class page
  {
    // page title
    private $title = '';
    // template tags
    private $tags = array();
    // tags which should be processed after the page has been parsed
    // reason: what if there are teplate tags within the database content, we must parse the page, then parse it again for post parse tags
    private $postParseTags = array();
    // template bits
    private $bits = array();
    // the page content
    private $content = "";
    private $apd = array();
    /**
     * Create our page object
     */
     function __construct(Registry $registry)
     {
       $this->registry = $registry;
     }

     /**
      * Get the page title from the page
      * @return String
      */
      public function getTitle()
      {
        return $this->title;
      }
      /**
       * Set the page title
       * @param String $title the page title
       * @return void
       */
       public function setTitle($title)
       {
         $this->title = $title;
       }
       /**
        * Set the page content
        * @param String $content the page content
        * @return void
        */
        public function setContent($content)
        {
          $this->content = $content;
        }
       /**
        * Add a template tag, and its replacement value/data to the page
        * @param String $key the key to store within the tags array
        * @param String $data the replacement data (may also be an array)
        * @return void
        */
        public function addTag($key, $data)
        {
          $this->tags[$key] = $data;
        }
        public function removeTag($key)
        {
          unset($this->tags[$key]);
        }
        /**
         * Get tags associated with the page
         * @return void
         */
         public function getTags()
         {
           return $this->tags;
         }
         /**
          * Add post parse tags: as per adding tags
          * @param String $key the key to store within the array
          * @param String $data the replacement data
          * @return void
          */
          public function addPPTag($key, $data)
          {
            $this->postParseTags[$key] = $data;
          }
          /**
           * Get tags to be parsed after the first batch have been parsed
           * @return array
           */
           public function getPPTags()
           {
             return $this->postParseTags;
           }
           /**
            * Add a template bit to the page, doesn't actually add the content just yet
            * @param String the tag where the template is added
            * @param String the template file name
            * @return void
            */
            public function addTemplateBit($tag, $bit)
            {
              $this->bits[$tag] = $bit;
            }
            /**
             * Adds additional parsing data
             * A.P.D is used in parsing loops. we may want to have an extra biti of data depending on iterations value
             * for example on a form list, we may want a specific item to be "selected"
             * @param String block the condition applies to
             * @param String tag within the block the condition applied to
             * @param String condition : what the tag must equal
             * @param String extratag : if the tag value = condition then we have an extra tag called extratag
             * @param String data : if the tag value = condition then extra tag is replaced with this value
             */
            public function addAdditionalParsingData($block, $tag, $condition, $extratag, $data)
            {
              $this->apd[$block] = array($tag => array('condition' => $condition, 'tag' => $extratag, 'data' => $data));
            }
            /**
             * Get the template bits to be entered into the page
             * @return array the array of template tags and template file names
             */
             public function getBits()
             {
               return $this->bits;
             }
             public function getAdditionalParsingData()
             {
               return $this->apd;
             }
             /**
              * Gets a chunck of page content
              * @param String the tag wrapping the block (<!-- START tag --> block <!-- END tag -->)
              * @return String the block of content
              */
              public function getBlock($tag)
              {
                // echo $tag;

                $tor = str_replace();
              }
  }

 ?>
