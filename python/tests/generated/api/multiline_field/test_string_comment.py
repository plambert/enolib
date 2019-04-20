import enolib

def test_querying_an_existing_single_line_required_string_comment_from_a_field_produces_the_expected_result():
    input = ("> comment\n"
             "-- multiline_field\n"
             "value\n"
             "-- multiline_field")

    output = enolib.parse(input).field('multiline_field').required_string_comment()

    expected = ("comment")
    
    assert output == expected

def test_querying_an_existing_two_line_required_string_comment_from_a_field_produces_the_expected_result():
    input = (">comment\n"
             ">  comment\n"
             "-- multiline_field\n"
             "value\n"
             "-- multiline_field")

    output = enolib.parse(input).field('multiline_field').required_string_comment()

    expected = ("comment\n"
                "  comment")
    
    assert output == expected

def test_querying_an_existing_required_string_comment_with_blank_lines_from_a_field_produces_the_expected_result():
    input = (">\n"
             ">     comment\n"
             ">\n"
             ">   comment\n"
             ">\n"
             "> comment\n"
             ">\n"
             "-- multiline_field\n"
             "value\n"
             "-- multiline_field")

    output = enolib.parse(input).field('multiline_field').required_string_comment()

    expected = ("    comment\n"
                "\n"
                "  comment\n"
                "\n"
                "comment")
    
    assert output == expected

def test_querying_an_optional_existing_string_comment_from_a_field_produces_the_expected_result():
    input = ("> comment\n"
             "-- multiline_field\n"
             "value\n"
             "-- multiline_field")

    output = enolib.parse(input).field('multiline_field').optional_string_comment()

    expected = ("comment")
    
    assert output == expected

def test_querying_an_optional_missing_string_comment_from_a_field_produces_the_expected_result():
    input = ("-- multiline_field\n"
             "value\n"
             "-- multiline_field")

    output = enolib.parse(input).field('multiline_field').optional_string_comment()

    assert output == None