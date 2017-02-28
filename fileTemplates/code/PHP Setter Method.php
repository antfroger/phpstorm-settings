/**
 * @param ${TYPE_HINT} $${PARAM_NAME}
 *
 #if (${STATIC} == "static")
 * @return self
#else
 * @return $this
#end
 */
public ${STATIC} function set${NAME}($${PARAM_NAME})
{
#if (${STATIC} == "static")
    self::$${FIELD_NAME} = $${PARAM_NAME};
    
    return self;
#else
    $this->${FIELD_NAME} = $${PARAM_NAME};
    
    return $this;
#end
}
