use std::fs::File;
use std::io::prelude::*;

#[test]
fn parse() {
    let input = include_str!("sample.eno");

    let _document = enors::parse(&input, false);

    assert!(true);
}
