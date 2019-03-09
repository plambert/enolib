const eno = require('../..');

describe('Empty', () => {
  let empty;

  beforeEach(() => {
    empty = eno.parse('element:').empty('element');
  });

  it('is untouched after initialization', () => {
    expect(empty._instruction.touched).toBeUndefined();
  });

  describe('raw()', () => {
    it('returns a native object representation', () => {
      expect(empty.raw()).toEqual({ key: 'element', type: 'emptyElement' });
    });
  });

  describe('toString()', () => {
    it('returns a debug abstraction', () => {
      expect(empty.toString()).toEqual('[object Empty key=element]');
    });
  });

  describe('toStringTag symbol', () => {
    it('returns a custom tag', () => {
      expect(Object.prototype.toString.call(empty)).toEqual('[object Empty]');
    });
  });
});
