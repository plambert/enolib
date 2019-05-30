# frozen_string_literal: true

describe 'Obtaining and throwing an error with a custom message in the context of a field\'s value' do
  it 'raises the expected ValidationError' do
    input = 'field: value'

    begin
      raise Enolib.parse(input).field('field').value_error('my message')
    rescue Enolib::ValidationError => error
      text = 'There is a problem with the value of this element: my message'
      
      expect(error.text).to eq(text)
      
      snippet = "   Line | Content\n" \
                ' >    1 | field: value'
      
      expect(error.snippet).to eq(snippet)
      
      expect(error.selection[:from][:line]).to eq(0)
      expect(error.selection[:from][:column]).to eq(7)
      expect(error.selection[:to][:line]).to eq(0)
      expect(error.selection[:to][:column]).to eq(12)
    end
  end
end

describe 'Obtaining and throwing an error with a custom generated message in the context of a field\'s value' do
  it 'raises the expected ValidationError' do
    input = 'field: value'

    begin
      raise(Enolib.parse(input).field('field').value_error { |value| "my generated message for value '#{value}'" })
    rescue Enolib::ValidationError => error
      text = 'There is a problem with the value of this element: my generated message for value \'value\''
      
      expect(error.text).to eq(text)
      
      snippet = "   Line | Content\n" \
                ' >    1 | field: value'
      
      expect(error.snippet).to eq(snippet)
      
      expect(error.selection[:from][:line]).to eq(0)
      expect(error.selection[:from][:column]).to eq(7)
      expect(error.selection[:to][:line]).to eq(0)
      expect(error.selection[:to][:column]).to eq(12)
    end
  end
end